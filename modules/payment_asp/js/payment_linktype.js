(function ($, drupalSettings) {
		'use strict';
    Drupal.behaviors.payment_linktypejs = {
        attach: function (context, settings) {
        	var data = drupalSettings.payment_asp.orderData;
        	// console.log(data.orderDetail['orderDetail0'].dtl_tax);

        	//Get size of js object
					Object.size = function(obj) {
					    var size = 0, key;
					    for (key in obj) {
					        if (obj.hasOwnProperty(key)) size++;
					    }
					    return size;
					};
        	// START SHA1 Hashing code
			    var rotateLeft = function(lValue, iShiftBits) {
			        return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
			    }

			    var lsbHex = function(value) {
			        var string = "";
			        var i;
			        var vh;
			        var vl;
			        for(i = 0;i <= 6;i += 2) {
			            vh = (value>>>(i * 4 + 4))&0x0f;
			            vl = (value>>>(i*4))&0x0f;
			            string += vh.toString(16) + vl.toString(16);
			        }
			        return string;
			    };

			    var cvtHex = function(value) {
			        var string = "";
			        var i;
			        var v;
			        for(i = 7;i >= 0;i--) {
			            v = (value>>>(i * 4))&0x0f;
			            string += v.toString(16);
			        }
			        return string;
			    };

			    var uTF8Encode = function(string) {
			        string = string.replace(/\x0d\x0a/g, "\x0a");
			        var output = "";
			        for (var n = 0; n < string.length; n++) {
			            var c = string.charCodeAt(n);
			            if (c < 128) {
			                output += String.fromCharCode(c);
			            } else if ((c > 127) && (c < 2048)) {
			                output += String.fromCharCode((c >> 6) | 192);
			                output += String.fromCharCode((c & 63) | 128);
			            } else {
			                output += String.fromCharCode((c >> 12) | 224);
			                output += String.fromCharCode(((c >> 6) & 63) | 128);
			                output += String.fromCharCode((c & 63) | 128);
			            }
			        }
			        return output;
			    };

			    $.extend({
			        sha1: function(string) {
			            var blockstart;
			            var i, j;
			            var W = new Array(80);
			            var H0 = 0x67452301;
			            var H1 = 0xEFCDAB89;
			            var H2 = 0x98BADCFE;
			            var H3 = 0x10325476;
			            var H4 = 0xC3D2E1F0;
			            var A, B, C, D, E;
			            var tempValue;
			            string = uTF8Encode(string);
			            var stringLength = string.length;
			            var wordArray = new Array();
			            for(i = 0;i < stringLength - 3;i += 4) {
			                j = string.charCodeAt(i)<<24 | string.charCodeAt(i + 1)<<16 | string.charCodeAt(i + 2)<<8 | string.charCodeAt(i + 3);
			                wordArray.push(j);
			            }
			            switch(stringLength % 4) {
			                case 0:
			                    i = 0x080000000;
			                break;
			                case 1:
			                    i = string.charCodeAt(stringLength - 1)<<24 | 0x0800000;
			                break;
			                case 2:
			                    i = string.charCodeAt(stringLength - 2)<<24 | string.charCodeAt(stringLength - 1)<<16 | 0x08000;
			                break;
			                case 3:
			                    i = string.charCodeAt(stringLength - 3)<<24 | string.charCodeAt(stringLength - 2)<<16 | string.charCodeAt(stringLength - 1)<<8 | 0x80;
			                break;
			            }
			            wordArray.push(i);
			            while((wordArray.length % 16) != 14 ) wordArray.push(0);
			            wordArray.push(stringLength>>>29);
			            wordArray.push((stringLength<<3)&0x0ffffffff);
			            for(blockstart = 0;blockstart < wordArray.length;blockstart += 16) {
			                for(i = 0;i < 16;i++) W[i] = wordArray[blockstart+i];
			                for(i = 16;i <= 79;i++) W[i] = rotateLeft(W[i-3] ^ W[i-8] ^ W[i-14] ^ W[i-16], 1);
			                A = H0;
			                B = H1;
			                C = H2;
			                D = H3;
			                E = H4;
			                for(i = 0;i <= 19;i++) {
			                    tempValue = (rotateLeft(A, 5) + ((B&C) | (~B&D)) + E + W[i] + 0x5A827999) & 0x0ffffffff;
			                    E = D;
			                    D = C;
			                    C = rotateLeft(B, 30);
			                    B = A;
			                    A = tempValue;
			                }
			                for(i = 20;i <= 39;i++) {
			                    tempValue = (rotateLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff;
			                    E = D;
			                    D = C;
			                    C = rotateLeft(B, 30);
			                    B = A;
			                    A = tempValue;
			                }
			                for(i = 40;i <= 59;i++) {
			                    tempValue = (rotateLeft(A, 5) + ((B&C) | (B&D) | (C&D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff;
			                    E = D;
			                    D = C;
			                    C = rotateLeft(B, 30);
			                    B = A;
			                    A = tempValue;
			                }
			                for(i = 60;i <= 79;i++) {
			                    tempValue = (rotateLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff;
			                    E = D;
			                    D = C;
			                    C = rotateLeft(B, 30);
			                    B = A;
			                    A = tempValue;
			                }
			                H0 = (H0 + A) & 0x0ffffffff;
			                H1 = (H1 + B) & 0x0ffffffff;
			                H2 = (H2 + C) & 0x0ffffffff;
			                H3 = (H3 + D) & 0x0ffffffff;
			                H4 = (H4 + E) & 0x0ffffffff;
			            }
			            tempValue = cvtHex(H0) + cvtHex(H1) + cvtHex(H2) + cvtHex(H3) + cvtHex(H4);
			            return tempValue.toLowerCase();
			        }
			    });
			    // END SHA1 Hashing code
			    // START encode64 code
				  var keyStr = "ABCDEFGHIJKLMNOP" +
				               "QRSTUVWXYZabcdef" +
				               "ghijklmnopqrstuv" +
				               "wxyz0123456789+/" +
				               "=";

				  function encode64(input) {
				     input = escape(input);
				     var output = "";
				     var chr1, chr2, chr3 = "";
				     var enc1, enc2, enc3, enc4 = "";
				     var i = 0;

				     do {
				        chr1 = input.charCodeAt(i++);
				        chr2 = input.charCodeAt(i++);
				        chr3 = input.charCodeAt(i++);

				        enc1 = chr1 >> 2;
				        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
				        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
				        enc4 = chr3 & 63;

				        if (isNaN(chr2)) {
				           enc3 = enc4 = 64;
				        } else if (isNaN(chr3)) {
				           enc4 = 64;
				        }

				        output = output +
				           keyStr.charAt(enc1) +
				           keyStr.charAt(enc2) +
				           keyStr.charAt(enc3) +
				           keyStr.charAt(enc4);
				        chr1 = chr2 = chr3 = "";
				        enc1 = enc2 = enc3 = enc4 = "";
				     } while (i < input.length);

				     return output;
				  }
				  // END encode64 code
			    f_submit();

					function f_submit() { 

				    var order = new Order();
				    order.pay_method            = "";
				    order.merchant_id           = "30132";
				    order.service_id            = "103";
				    order.cust_code             = "Merchant_TestUser_999999";
				    order.sps_cust_no           = "";
				    order.sps_payment_no        = "";
				    order.order_id              = "734beca56f016d1776fd45c0d229b057";
				    order.item_id               = "T_0003";
				    order.pay_item_id           = "";
				    order.item_name             = "テスト商品";
				    order.tax                   = "";
				    order.amount                = "1";
				    order.pay_type              = "0";
				    order.auto_charge_type      = "";
				    order.service_type          = "0";
				    order.div_settele           = "";
				    order.last_charge_month     = "";
				    order.camp_type             = "";
				    order.tracking_id           = "";
				    order.terminal_type         = "0";
				    order.success_url           = "http://stbfep.sps-system.com/MerchantPaySuccess.jsp";
				    order.cancel_url            = "http://stbfep.sps-system.com/MerchantPayCancel.jsp";
				    order.error_url             = "http://stbfep.sps-system.com/MerchantPayError.jsp";
				    order.pagecon_url           = "http://stbfep.sps-system.com/MerchantPayResultRecieveSuccess.jsp";
				    order.free1                 = "";
				    order.free2                 = "";
				    order.free3                 = "";
				    order.free_csv_input        =
				        "LAST_NAME=鈴木,FIRST_NAME=太郎,LAST_NAME_KANA=スズキ,FIRST_NAME_KANA=タロウ,FIRST_ZIP=210,SECOND_ZIP=0001,ADD1=岐阜県,ADD2=あああ市あああ町,ADD3=,TEL=12345679801,MAIL=aaaa@bb.jp,ITEM_NAME=TEST ITEM";
				    order.request_date          = getYYYYMMDDHHMMSS();
				    order.limit_second          = "";
				    order.hashkey               = "ed679e1c9f90c2ab96b25d5c580b58e25192eb5d";

				    var orderDetail = new OrderDetail();
				    orderDetail.dtl_rowno       = "1";
				    orderDetail.dtl_item_id     = "dtlItem_1";
				    orderDetail.dtl_item_name   = "明細商品名1";
				    orderDetail.dtl_item_count  = "1";
				    orderDetail.dtl_tax         = "1";
				    orderDetail.dtl_amount      = "1";
				    orderDetail.dtl_free1       = "";
				    orderDetail.dtl_free2       = "";
				    orderDetail.dtl_free3       = "";
				    order.orderDetail.push(orderDetail);

				    // console.log(order.orderDetail);
				    // order.free_csv2              = encode64(order.free_csv_input);
				    // フリーCSV
				    order.free_csv              = btoa(unescape(encodeURIComponent((order.free_csv_input))));

				    //チェックサム
				    order.sps_hashcode          = $.sha1(order.toString());

				    feppost(order);
					}

					// オブジェクト定義[OrderDetail]
					function OrderDetail() {
					    this.toString = function() {
					        var result =
					            this.dtl_rowno +
					            this.dtl_item_id +
					            this.dtl_item_name +
					            this.dtl_item_count +
					            this.dtl_tax +
					            this.dtl_amount +
					            this.dtl_free1 +
					            this.dtl_free2 +
					            this.dtl_free3;
					        return result;
					    }
					}

					// オブジェクト定義[Order]
					function Order() {
					    this.orderDetail = new Array();
					    this.toString = function() {

					        var resultOrderDetail = "";
					        for (i = 0; i < this.orderDetail.length; i++) {
					            resultOrderDetail = resultOrderDetail + this.orderDetail[i].toString();
					        }

					        var result =
					            this.pay_method +
					            this.merchant_id +
					            this.service_id +
					            this.cust_code +
					            this.sps_cust_no +
					            this.sps_payment_no +
					            this.order_id +
					            this.item_id +
					            this.pay_item_id +
					            this.item_name +
					            this.tax +
					            this.amount +
					            this.pay_type +
					            this.auto_charge_type +
					            this.service_type +
					            this.div_settele +
					            this.last_charge_month +
					            this.camp_type +
					            this.tracking_id +
					            this.terminal_type +
					            this.success_url +
					            this.cancel_url +
					            this.error_url +
					            this.pagecon_url +
					            this.free1 +
					            this.free2 +
					            this.free3 +
					            this.free_csv +
					            resultOrderDetail +
					            this.request_date +
					            this.limit_second +
					            this.hashkey;
					        return result;
					    };
					}

					// 日時の取得
					function getYYYYMMDDHHMMSS() {
					    var now = new Date();
					    return now.getFullYear() + zeroPadding(now.getMonth() + 1) + zeroPadding(now.getDate()) +
					           zeroPadding(now.getHours()) + zeroPadding(now.getMinutes()) + zeroPadding(now.getSeconds());
					}

					function zeroPadding(num) {
					    if (num < 10) { num = "0" + num; }
						return num + "";
					}

					function feppost(order) {

					    var connectUrl = "https://stbfep.sps-system.com/Extra/PayRequestAction.do";
					    // var connectUrl = "https://stbfep.sps-system.com/f01/FepBuyInfoReceive.do";

					    var form =
					        $('<form></form>',{action:connectUrl,method:'POST'}).hide();

					    var body = $('body');
					    body.append(form);
					    form.append($('<input>',{type:'hidden',name:'pay_method'        ,value:order.pay_method                  }));
					    form.append($('<input>',{type:'hidden',name:'merchant_id'       ,value:order.merchant_id                 }));
					    form.append($('<input>',{type:'hidden',name:'service_id'        ,value:order.service_id                  }));
					    form.append($('<input>',{type:'hidden',name:'cust_code'         ,value:order.cust_code                   }));
					    form.append($('<input>',{type:'hidden',name:'sps_cust_no'       ,value:order.sps_cust_no                 }));
					    form.append($('<input>',{type:'hidden',name:'sps_payment_no'    ,value:order.sps_payment_no              }));
					    form.append($('<input>',{type:'hidden',name:'order_id'          ,value:order.order_id                    }));
					    form.append($('<input>',{type:'hidden',name:'item_id'           ,value:order.item_id                     }));
					    form.append($('<input>',{type:'hidden',name:'pay_item_id'       ,value:order.pay_item_id                 }));
					    form.append($('<input>',{type:'hidden',name:'item_name'         ,value:order.item_name                   }));
					    form.append($('<input>',{type:'hidden',name:'tax'               ,value:order.tax                         }));
					    form.append($('<input>',{type:'hidden',name:'amount'            ,value:order.amount                      }));
					    form.append($('<input>',{type:'hidden',name:'pay_type'          ,value:order.pay_type                    }));
					    form.append($('<input>',{type:'hidden',name:'auto_charge_type'  ,value:order.auto_charge_type            }));
					    form.append($('<input>',{type:'hidden',name:'service_type'      ,value:order.service_type                }));
					    form.append($('<input>',{type:'hidden',name:'div_settele'       ,value:order.div_settele                 }));
					    form.append($('<input>',{type:'hidden',name:'last_charge_month' ,value:order.last_charge_month           }));
					    form.append($('<input>',{type:'hidden',name:'camp_type'         ,value:order.camp_type                   }));
					    form.append($('<input>',{type:'hidden',name:'tracking_id'       ,value:order.tracking_id                 }));
					    form.append($('<input>',{type:'hidden',name:'terminal_type'     ,value:order.terminal_type               }));
					    form.append($('<input>',{type:'hidden',name:'success_url'       ,value:order.success_url                 }));
					    form.append($('<input>',{type:'hidden',name:'cancel_url'        ,value:order.cancel_url                  }));
					    form.append($('<input>',{type:'hidden',name:'error_url'         ,value:order.error_url                   }));
					    form.append($('<input>',{type:'hidden',name:'pagecon_url'       ,value:order.pagecon_url                 }));
					    form.append($('<input>',{type:'hidden',name:'free1'             ,value:order.free1                       }));
					    form.append($('<input>',{type:'hidden',name:'free2'             ,value:order.free2                       }));
					    form.append($('<input>',{type:'hidden',name:'free3'             ,value:order.free3                       }));
					    form.append($('<input>',{type:'hidden',name:'free_csv'          ,value:order.free_csv                    }));
					    form.append($('<input>',{type:'hidden',name:'request_date'      ,value:order.request_date                }));
					    form.append($('<input>',{type:'hidden',name:'limit_second'      ,value:order.limit_second                }));
					    form.append($('<input>',{type:'hidden',name:'hashkey'           ,value:order.hashkey                     }));
					    form.append($('<input>',{type:'hidden',name:'sps_hashcode'      ,value:order.sps_hashcode                }));

					    for (i = 0; i < order.orderDetail.length; i++) {
					        form.append($('<input>',{type:'hidden',name:'dtl_rowno'         ,value:order.orderDetail[i].dtl_rowno             }));
					        form.append($('<input>',{type:'hidden',name:'dtl_item_id'       ,value:order.orderDetail[i].dtl_item_id           }));
					        form.append($('<input>',{type:'hidden',name:'dtl_item_name'     ,value:order.orderDetail[i].dtl_item_name         }));
					        form.append($('<input>',{type:'hidden',name:'dtl_item_count'    ,value:order.orderDetail[i].dtl_item_count        }));
					        form.append($('<input>',{type:'hidden',name:'dtl_tax'           ,value:order.orderDetail[i].dtl_tax               }));
					        form.append($('<input>',{type:'hidden',name:'dtl_amount'        ,value:order.orderDetail[i].dtl_amount            }));
					        form.append($('<input>',{type:'hidden',name:'dtl_free1'         ,value:order.orderDetail[i].dtl_free1             }));
					        form.append($('<input>',{type:'hidden',name:'dtl_free2'         ,value:order.orderDetail[i].dtl_free2             }));
					        form.append($('<input>',{type:'hidden',name:'dtl_free3'         ,value:order.orderDetail[i].dtl_free3             }));
					    }
					    form.submit();
					}
        }
    };
}(jQuery, drupalSettings));