/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// by HHK 2016-03-25
$(function(){
    // 阻止电话和qq被百度抓取
    var telphone = "400-6387-883";
    var domTelphoneID = ".website_telphone";
    $(domTelphoneID).html("");
    $(domTelphoneID).html(telphone);
    
    // 阻止所有qq被百度抓取
    var QQ = "2885063857";
    var domQQID = ".website_QQ";
    $(domQQID).html("");
    $(domQQID).html(QQ);
    $("#onlinec").validate({
        rules: {
            zhiye: {
                required : true,
            },
            telephone: {
                required : true,
                mobile:true
            },
            username: {
                required : true,
            },
            email : {
                required : true,
                email    : true,
            },
            content: {
                required : true,
            },

        },
        messages: {
            zhiye: {
                required : '请输入职业',
            },
            telephone: {
                required : '请输入正确的手机号',
                mobile : '请输入正确的手机号',
            },
            username: {
                required : '请输入姓名',
            },
            email : {
                required : '请输入正确的邮箱地址',
                email    : '请输入正确的邮箱地址',
            },
            content: {
                required : '请输入留言',
            },

        }
    });
})
