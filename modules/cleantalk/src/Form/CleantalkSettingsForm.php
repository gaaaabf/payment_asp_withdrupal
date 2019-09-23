<?php

namespace Drupal\cleantalk\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;
use Drupal\cleantalk\CleantalkSFW;
use Drupal\cleantalk\CleantalkHelper;

class CleantalkSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */

  public function getFormId() {

    return 'cleantalk_settings_form';

  }

  /**
   * {@inheritdoc}
   */

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->config('cleantalk.settings');

    foreach ($form_state->getValues() as $key=>$value) {

      if (strpos($key, 'cleantalk') !== FALSE) {

        $config->set($key, $value);

      }

    }

    $config->save();

    if (method_exists($this, '_submitForm')) {

      $this->_submitForm($form, $form_state);

    }

    parent::submitForm($form, $form_state);

  }

  /**
   * {@inheritdoc}
   */

  public function validateForm(array &$form, FormStateInterface $form_state) {

    $key_is_valid = CleantalkHelper::apbct_key_is_correct(trim($form_state->getValue('cleantalk_authkey'))); 
    $key_is_ok = false;

    if ($key_is_valid) {

      CleantalkHelper::api_method_send_empty_feedback($form_state->getValue('cleantalk_authkey'), CLEANTALK_USER_AGENT);
      $account_status = CleantalkHelper::api_method__notice_paid_till($form_state->getValue('cleantalk_authkey'));

      if (empty($account_status['error'])) {

        $key_is_ok = true;

        if ($form_state->getValue('cleantalk_sfw') === 1) {

          $sfw = new CleantalkSFW();
          $sfw->sfw_update($form_state->getValue('cleantalk_authkey'));
          $sfw->send_logs($form_state->getValue('cleantalk_authkey'));
          \Drupal::state()->set('cleantalk_sfw_last_check',time());
          \Drupal::state()->set('cleantalk_sfw_last_send_log',time()); 

        }

      }

      \Drupal::state()->set('cleantalk_api_show_notice', (empty($account_status['error']) && isset($account_status['show_notice'])) ? $account_status['show_notice'] : 0);
      \Drupal::state()->set('cleantalk_api_renew', (empty($account_status['error']) && isset($account_status['renew'])) ? $account_status['renew'] : 0);
      \Drupal::state()->set('cleantalk_api_trial', (empty($account_status['error']) && isset($account_status['trial'])) ? $account_status['trial'] : 0);
      \Drupal::state()->set('cleantalk_api_user_token', (empty($account_status['error']) && isset($account_status['user_token'])) ? $account_status['user_token'] : '');
      \Drupal::state()->set('cleantalk_api_spam_count', (empty($account_status['error']) && isset($account_status['spam_count'])) ? $account_status['spam_count'] : 0);
      \Drupal::state()->set('cleantalk_api_moderate_ip', (empty($account_status['error']) && isset($account_status['moderate_ip'])) ? $account_status['moderate_ip'] : 0);
      \Drupal::state()->set('cleantalk_api_moderate', (empty($account_status['error']) && isset($account_status['moderate'])) ? $account_status['moderate'] : 0);
      \Drupal::state()->set('cleantalk_api_show_review', (empty($account_status['error']) && isset($account_status['show_review'])) ? $account_status['show_review'] : 0);
      \Drupal::state()->set('cleantalk_api_service_id', (empty($account_status['error']) && isset($account_status['service_id'])) ? $account_status['service_id'] : 0);
      \Drupal::state()->set('cleantalk_api_license_trial', (empty($account_status['error']) && isset($account_status['license_trial'])) ? $account_status['license_trial'] : 0);
      \Drupal::state()->set('cleantalk_api_account_name_ob', (empty($account_status['error']) && isset($account_status['account_name_ob'])) ? $account_status['account_name_ob'] : '');
      \Drupal::state()->set('cleantalk_api_ip_license', (empty($account_status['error']) && isset($account_status['ip_license'])) ? $account_status['ip_license'] : 0);
      \Drupal::state()->set('cleantalk_show_renew_banner', (\Drupal::state()->get('cleantalk_api_show_notice') && \Drupal::state()->get('cleantalk_api_trial')) ? 1 : 0);

    }

    if (!$key_is_ok) {
      
      $form_state->setErrorByName('cleantalk_authkey', $this->t('Access key is not valid.'));

    }

  }

  /**
   * {@inheritdoc}
   */

  protected function getEditableConfigNames() {

    return ['cleantalk.settings'];

  }

  public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {

    //Renew banner
    
    if (\Drupal::state()->get('cleantalk_show_renew_banner')) {

      $link = (\Drupal::state()->get('cleantalk_api_trial')) ? 'https://cleantalk.org/my/bill/recharge?utm_source=banner&utm_medium=wp-backend&utm_campaign=Drupal%20backend%20trial&user_token=' : 'https://cleantalk.org/my/bill/recharge?utm_source=banner&utm_medium=wp-backend&utm_campaign=Drupal%20backend%20renew&user_token=';

      \Drupal::messenger()->addMessage(t("Cleantalk module trial period ends, please upgrade to <a href='" . $link . \Drupal::state()->get('cleantalk_api_user_token') . "' target='_blank'><b>premium version</b></a> ."), 'warning', false);

    }

    if (\Drupal::state()->get('cleantalk_api_account_name_ob')) {

      $key_description = $this->t('Account at cleantalk.org is <b>' . \Drupal::state()->get('cleantalk_api_account_name_ob') . '</b>');

    }
    elseif (\Drupal::state()->get('cleantalk_api_moderate_ip') == 1) {

      $key_description = $this->t('The anti-spam service is paid by your hosting provider. License #<b>' . \Drupal::state()->get('cleantalk_api_ip_license') . '</b>');

    }
    else {

      $key_description = $this->t('Click <a target="_blank" href="http://cleantalk.org/register?platform=drupal">here</a> to get access key.');
    }

    $form['cleantalk_authkey'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Access key'),
      '#size' => 20,
      '#maxlength' => 20,
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_authkey') ? \Drupal::config('cleantalk.settings')->get('cleantalk_authkey') : '',
      '#description' => $key_description,
    ];

    $form['cleantalk_comments'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Comments'),
    );

    $form['cleantalk_comments']['cleantalk_check_comments'] = array(
    '#type' => 'checkbox',
    '#title' => $this->t('Check comments'),
    '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_comments') ?: 1,
    '#description' => $this->t('Enabling this option will allow you to check all comments on your website.'),   
    ); 

    $form['cleantalk_comments']['cleantalk_check_comments_automod'] = array(
    '#type' => 'checkbox',
    '#title' => $this->t('Enable automoderation'),
    '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_comments_automod'),
    '#description' => $this->t('Automatically put suspicious comments which may not be 100% spam to manual approvement and block obvious spam comments.').
    '<br /><span class="admin-missing">' .
    $this->t('Note: If disabled, all suspicious comments will be automatically blocked!') .
    '</span>', 
    '#states' => array(
        // Only show this field when the value when checking comments is enabled
        'disabled' => array(
            ':input[name="cleantalk_check_comments"]' => array('checked' => FALSE),
        ),
      ),          
    ); 

    $form['cleantalk_comments']['cleantalk_check_comments_min_approved'] = array(
      '#type' => 'number',
      '#title' => $this->t('Minimum approved comments per registered user'),
      '#min' => 1,
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_comments_min_approved'),
      '#description' => $this->t('Moderate messages of guests and registered users who have approved messages less than this value.'),
      '#min' => 1,
      '#states' => array(
          // Only show this field when the value when checking comments is enabled
          'disabled' => array(
              ':input[name="cleantalk_check_comments"]' => array('checked' => FALSE),
          ),
      ),    
    ); 

    $form['cleantalk_search'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Search'),
    );

    $form['cleantalk_search']['cleantalk_check_search_form'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Check search form'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_search_form') ?: 1,
      '#description' => $this->t('Enabling this option will allow you to check search form on your website.'),
    ); 

    $form['cleantalk_search']['cleantalk_search_noindex'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Add noindex for search form'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_search_noindex'),
      '#description' => $this->t('Add html meta-tag robots-noindex to search form.'),
    ); 

    $form['cleantalk_check_register'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Check registrations'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_register') ?: 1,
      '#description' => $this->t('Enabling this option will allow you to check all registrations on your website.'),
    );

    $form['cleantalk_check_webforms'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Check webforms'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_webforms'),
      '#description' => $this->t('Enabling this option will allow you to check all webforms on your website.'),
    );

    $form['cleantalk_check_contact_forms'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Check contact forms'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_contact_forms') ?: 1,
      '#description' => $this->t('Enabling this option will allow you to check all contact forms on your website.'),
    );

    $form['cleantalk_check_forum_topics'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Check forum topics'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_forum_topics'),
      '#description' => $this->t('Enabling this option will allow you to check all forum topics on your website.'),
    );      

    $form['cleantalk_check_ccf'] = array(
    '#type' => 'checkbox',
    '#title' => $this->t('Check custom forms'),
    '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_check_ccf'),
    '#description' => $this->t('Enabling this option will allow you to check all forms on your website.') .
    '<br /><span class="admin-missing">' .
    $this->t('Note: May cause conflicts!') .
    '</span>',
    );

    $form['cleantalk_sfw'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('SpamFireWall'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_sfw'),
      '#description' => $this->t('This option allows to filter spam bots before they access website. Also reduces CPU usage on hosting server and accelerates pages load time.'),
    ];   

    $form['cleantalk_link'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Tell others about CleanTalk'),
      '#default_value' => \Drupal::config('cleantalk.settings')->get('cleantalk_link'),
      '#description' => $this->t('Checking this box places a small link under the comment form that lets others know what anti-spam tool protects your site.'),
    ];

    return parent::buildForm($form, $form_state);
    
  }

}
