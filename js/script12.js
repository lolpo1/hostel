function getCookie(name) {
	  let matches = document.cookie.match(new RegExp(
	    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	  ));
	  return matches ? decodeURIComponent(matches[1]) : undefined;
	}


$(function(){	
	var login = getCookie('user');
	  $('#btnSend').click(function(event){
	 	var name = getCookie('user');
	 	var con = getCookie('con');
	 	var msg = $('#txtMessage').val();
		
	 	$.ajax({
	 			type:"POST",
	 			url:"messageSave.php",
	 			data: ({name:name, msg:msg, con:con}),
	 			success:function(msg){
	 				if(msg==1){
	 					$('#txtMessage').val("");
	 				}
	 				$.ajax({
	 					url:"show.php",
	 					success:function(html){
	 						$('#messages').html(html);
	 					}
	 				});
	 			}
	 		});
	 });	
	
	authorize();

	
	function authorize(who){
	 	var name = getCookie('user');
	 	var con = getCookie('con');
	 	{
			$.ajax({
				type:"POST",
				url:who,
				data: ({name:name, con:con}),
				success:function(msg){
						$('#win1').css("display","none");
						$('#autorize').append(""+name);
						$('#autorize1').append(""+con);
						$('#win2').css("display","block");
					}
			});
			 setInterval(showMess,100);
			 setInterval(showActive,100);
			 setInterval(delActive,1000);

			 
		}
	}
	


	function showMess(){
		var name = getCookie('user');
	 	var con = getCookie('con');
		$.ajax({
			type:"POST",
			url:"show.php",
			data: ({name:name, con:con}),
			success:function(html){
				$('#messages').html(html);
			}
		});
	}
	
	 function showActive(){
	 	$.ajax({
	 		type:"POST",
	 		url:"showActive.php",
	 		success:function(html){
	 			$('#active').html(html);
	 			$('#yourid').html(getCookie('user'));
	 		}
	 	});
	 }
	
	function setId(){
		$.ajax({
	 		type:"POST",
	 		url:"setId.php",
	 		success:function(html){
	 			document.cookie = "user="+html;
	 		}
	 	});
	}

	function delActive(){
		var id=getCookie('user');
		
		if (id!=undefined && id!=""){
			var d=document.lastModified;
			d=Date.parse(d)/1000;
			$.ajax({
		 		type:"POST",
		 		data: ({id:id, d:d}),
		 		url:"delActive.php",
		 		success:function(html){
		 		}
		 	});
		}
	}
}); 

function disconnection(){
	var id1 = getCookie('user');
	var id2 = getCookie('con');
	
	$.ajax({
		type:"POST",
		url:"discon.php",
		data: ({id1:id1, id2:id2}),
		success:function(html){
			
		}
	});	

	document.cookie = "con=";
	$('#create').prop( "disabled", false );
	$('#i1').prop( "disabled", false );
	$('#i2').prop( "disabled", false );
	window.location.href = 'index.php';
}

function connection(){
	document.cookie = "con="+$("#con").val();
}



// конфигурация чат-бота
const configChatbot = {};
// CSS-селектор кнопки, посредством которой будем вызывать окно диалога с чат-ботом
configChatbot.btn = '.chatbot__btn';
// ключ для хранения отпечатка браузера
configChatbot.key = 'fingerprint';
// реплики чат-бота
configChatbot.replicas = 'SimpleChatbot-1.3.2/data/data-1.json';
// корневой элемент
configChatbot.root = SimpleChatbot.createTemplate();
// URL chatbot.php
configChatbot.url = 'SimpleChatbot-1.3.2/chatbot/chatbot.php';
// переменная для хранения экземпляра
let chatbot = null;
// добавление ключа для хранения отпечатка браузера в LocalStorage
let fingerprint = localStorage.getItem(configChatbot.key);
if (!fingerprint) {
  Fingerprint2.get(function (components) {
    fingerprint = Fingerprint2.x64hash128(components.map(function (pair) {
      return pair.value
    }).join(), 31)
    localStorage.setItem(configChatbot.key, fingerprint)
  });
}
// при клике по кнопке configChatbot.btn
document.querySelector(configChatbot.btn).onclick = function (e) {
  this.classList.add('d-none');
  const $tooltip = this.querySelector('.chatbot__tooltip');
  if ($tooltip) {
    $tooltip.classList.add('d-none');
  }
  configChatbot.root.classList.toggle('chatbot_hidden');
  if (chatbot) {
    return;
  }
  // получение json-файла, содержащего сценарий диалога для чат-бота через AJAX
  const request = new XMLHttpRequest();
  request.open('GET', configChatbot.replicas, true);
  request.responseType = 'json';
  request.onload = function () {
    const status = request.status;
    if (status === 200) {
      const data = request.response;
      // для поддержки IE11
      if (typeof data === 'string') {
        configChatbot.replicas = JSON.parse(data);
      } else {
        configChatbot.replicas = data;
      }
      // инициализация SimpleChatbot
      chatbot = new SimpleChatbot(configChatbot);
      chatbot.init();
    } else {
      console.log(status, request.response);
    }
  };
  request.send();
};