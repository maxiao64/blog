/**
 * 控制台打印字符画
 * @param stringTem
 * @returns {String}
 */
 function makeMulti (stringTem) {
    let l = new String(stringTem || string)
    l = l.substring(l.indexOf("/*") + 3, l.lastIndexOf("*/"))
    return l
  }

  let string = function () {
  /*
        ___           ___           ___                       ___           ___     
     /\__\         /\  \         |\__\          ___        /\  \         /\  \    
    /::|  |       /::\  \        |:|  |        /\  \      /::\  \       /::\  \   
   /:|:|  |      /:/\:\  \       |:|  |        \:\  \    /:/\:\  \     /:/\:\  \  
  /:/|:|__|__   /::\~\:\  \      |:|__|__      /::\__\  /::\~\:\  \   /:/  \:\  \ 
 /:/ |::::\__\ /:/\:\ \:\__\ ____/::::\__\  __/:/\/__/ /:/\:\ \:\__\ /:/__/ \:\__\
 \/__/~~/:/  / \/__\:\/:/  / \::::/~~/~    /\/:/  /    \/__\:\/:/  / \:\  \ /:/  /
       /:/  /       \::/  /   ~~|:|~~|     \::/__/          \::/  /   \:\  /:/  / 
      /:/  /        /:/  /      |:|  |      \:\__\          /:/  /     \:\/:/  /  
     /:/  /        /:/  /       |:|  |       \/__/         /:/  /       \::/  /   
     \/__/         \/__/         \|__|                     \/__/         \/__/    
  */
  }
  console.log(makeMulti(string));

$(document).ready(function(){
   $('.comment-to-user').click(function(event) {
      let that = event.target;
      let to_uid = that.dataset.uid;
      let to_username = that.dataset.username;
      $('.comment-to-username').text(to_username);
      $("input[name=to_uid]").val(to_uid);
      $('.comment-to-user-box').show();
   });

   $('.close-comment-to-user-btn').click(function() {
      $('.comment-to-user-box').hide();
      $("input[name=to_uid]").val('0');
   });
});


