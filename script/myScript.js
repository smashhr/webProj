
$(document).ready(function(){
    $("#myBtn").click(function(){
      $("#myModal").modal();
    });
  });

  $(document).ready(function(){
    $("#myBtn2").click(function(){
      $("#myModal2").modal();
    });
  });

  $(document).ready(function(){
    $("#myBtn0").click(function(){
      $("#myModal0").modal();
    });
  });

  var vid = document.getElementById("myVideo");
vid.onloadstart = function() {
  alert("Starting to load video");
};

function loadVideo(){
    alert(src="https://www.youtube.com/embed/tgbNymZ7vqY");
}

function gos() {
            
    window.location.href = "signup.html";
    }
function goi() {
    
    window.location.href = "instructors.html";
    }


    var stop = 0;
    var inst = [id="first", id="second", id="third", id="fourth", id="fifth", id="sexth"];
           function swap(){
            var id = setInterval(run, 100);
            document.getElementById("h").style.textShadow.anchor;
            
		}

		function run() {
		    //index = Math.floor(Math.random() * 8); //retun random number between 0 and 7
            //img.src = pic[index];
            var x = inst[0];
            inst[0] = inst[1];
            inst[1] = x; 
		}


function wel(){
    alert("Oman Drive Helper Platform √");
}