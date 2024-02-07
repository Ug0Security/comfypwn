<!DOCTYPE html>
<html>

<head>
    <title>CRAFT ZONE</title>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .col {
            display: flex;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            width: 100%;
            max-width: 100%;
            flex-grow: 1;
            flex-basis: 0px;
        }

        .col-auto {
            display: flex;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            width: auto;
            max-width: 100%;
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: auto;
        }

        .col-full {
            display: flex;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            width: auto;
            max-width: 100%;
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: 100%
        }
        
        
        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  text-align : center
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>
    <style>
        h1 {
            animation: flicker 1.5s infinite alternate;
        }

        /* Flickering animation */
        @keyframes flicker {

            0%,
            18%,
            22%,
            25%,
            53%,
            57%,
            100% {

                text-shadow:
                    0 0 4px #d3d3d3,
                    0 0 1px #d3d3d3,
                    0 0 40px #2cce73,
                    0 0 80px #2cce73,
                    0 0 90px #2cce73,
                    0 0 100px #2cce73,
                    0 0 150px #2cce73;
            }

            20%,
            24%,
            55% {
                text-shadow: none;
            }
        }
    </style>
</head>



<body class="text-[#2cce73] bg-white dark:bg-[#0d1016] transition-all">
    <div class="container mx-auto">
        <!-- Title -->
        <div class="row justify-center mt-12">
            <div class="col-auto my-6">
                <h1 class="neonText text-3xl">COMFYPWN ZONE :)</h1>
            </div>
        </div>

        <!-- Separator -->
        <div class="row mt-12 mb-4">
            <div class="col border-b border-[#2cce73]"></div>
        </div>

        <!-- Navbar buttons -->
        <div class="row mx-8 justify-between flex-wrap  gap-y-2">
            <div class="col-auto flex flex-wrap gap-2  gap-y-2">
            
            
 
                
            </div>
            <div class="col-auto flex flex-wrap gap-2 gap-y-2">
                <button class="bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all dark:text-[#7cfceb]" onclick="darkMode()" role="button">
                    <svg fill="currentColor" class="w-5 h-5 " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M3,11.985A9.811,9.811,0,0,0,12.569,22a9.528,9.528,0,0,0,8.309-5.059,1,1,0,0,0-.947-1.477l-.11.008c-.131.01-.263.02-.4.02a7.811,7.811,0,0,1-7.569-8.015,8.378,8.378,0,0,1,1.016-4A1,1,0,0,0,11.923,2,9.855,9.855,0,0,0,3,11.985Zm7.343-7.652a10.382,10.382,0,0,0-.488,3.144A9.89,9.89,0,0,0,18.137,17.4,7.4,7.4,0,0,1,12.569,20,7.811,7.811,0,0,1,5,11.985,7.992,7.992,0,0,1,10.343,4.333Z"></path>
                        </g>
                    </svg>
                </button>
                <button class="bg-[#2CCE73] dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all text-[#ffd505]" onclick="lightMode()" role="button">
                    <svg fill="currentColor" class="w-5 h-5"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M17,12a5,5,0,1,0-5,5A5.006,5.006,0,0,0,17,12Zm-5,3a3,3,0,1,1,3-3A3,3,0,0,1,12,15ZM11,4V2a1,1,0,0,1,2,0V4a1,1,0,0,1-2,0Zm1,15a1,1,0,0,1,1,1v2a1,1,0,0,1-2,0V20A1,1,0,0,1,12,19ZM19.778,5.636,18.364,7.05A1,1,0,0,1,16.95,5.636l1.414-1.414a1,1,0,0,1,1.414,1.414ZM4.222,18.364,5.636,16.95A1,1,0,0,1,7.05,18.364L5.636,19.778a1,1,0,0,1-1.414-1.414ZM23,12a1,1,0,0,1-1,1H20a1,1,0,0,1,0-2h2A1,1,0,0,1,23,12ZM2,13a1,1,0,0,1,0-2H4a1,1,0,0,1,0,2Zm14.95,5.364a1,1,0,0,1,1.414-1.414l1.414,1.414a1,1,0,1,1-1.414,1.414ZM4.222,5.636A1,1,0,0,1,5.636,4.222L7.05,5.636A1,1,0,1,1,5.636,7.05Z"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Separator -->
        <div class="row mt-4">
            <div class="col border-b border-[#2cce73]"></div>
        </div>

        <!-- Input form -->
        <div class="row mx-8 my-4">
         
            <div class="col-full w-full">
                <form method="post" action="/comfypwn/index.php?gif=1" class="flex flex-wrap w-full" onsubmit="send(event,this)">
               
<label for="target" class="whitespace-nowrap text-black dark:text-[#2cce73]">Target : </label><input type="text" name="target" id="target" value="http://211.14.2.90" class="rounded text-black dark:text-[#2cce73] border-[#2cce73] dark:bg-[#0d1016] focus:outline-none border dark:border-[#005704] hover:border-[#2CCE73] focus:border-[#2CCE73] py-1 px-4"></input><button class="bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all" type="button" name="list" onclick="loadmod();"  role="button">List Models</button> 
                       
                    <!-- Type  -->
                    <div class="flex flex-wrap w-full justify-between mb-4 gap-2 gap-y-2">
                        <div class="w-auto">
                       
                            <label for="param1" class="whitespace-nowrap text-black dark:text-[#2cce73]">Model :</label>
                            <select name="param1" id="param1" class=" focus:outline-none bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all py-1 px-4">
                                <option value="choix_model">Choix Modele</option>
                            </select></br>
                        </div>
                       </div>

             

                    <!-- Prompt -->
                    <div class="flex gap-1 flex-col w-full mb-4">
                        <label class="whitespace-nowrap text-black dark:text-[#2cce73]" for="param2">Prompt :</label>
                        <textarea name="param2" id="param2" rows="5" required class="w-full rounded border-[#2cce73] bg-white dark:bg-[#0d1016] focus:outline-none text-black dark:text-[#2cce73] border dark:border-[#005704] hover:border-[#2CCE73] focus:border-[#2CCE73] py-1 px-4"><?php     if (isset($_POST['param2'])) {
        echo $_POST['param2'];
    } ?></textarea>
                    </div>

                    <!-- Craft button -->
                    <div class="flex w-full"> 
                        <input type="submit" value="Craft GIF&VID" class="ml-auto bg-[#2CCE73] text-black dark:bg-transparent font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all text-white" role="button"><button onclick="resetime()" id="timer" class="ml-auto bg-[#2CCE73] text-black dark:bg-transparent font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all text-white"></button>
                    <img src=load.gif id=load hight=60 width=60 style="visibility:hidden" class="ml-auto bg-[#2CCE73] text-black dark:bg-transparent font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all text-white">
                    </div>
                </form>
            </div>
        </div>

        <!-- Separator -->
        <div class="row mt-4">
            <div class="col border-b border-[#2cce73]"></div>
        </div>
               <!-- Separator -->
        <div class="row mb-4">
            <div class="col border-b border-[#2cce73]"></div>
        </div>       
        
                              <button type="button" onclick="hidepr()" id="btnID" class="bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all" role="button">
                        Hide Prompts
                    </button>
            
             <button type="button" onclick="showpr()" id="btnID" class="bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all" role="button">
                        Show Prompts
                    </button>

    </div>
  <div class="row mx-8 my-4" >
            <div class="col-full w-full">
            <div class="flex gap-1 flex-col w-full mb-4">
<textarea readonly name="prompts" style="visibility:hidden" id="prompts" rows="5" required class="w-full rounded border-[#2cce73] bg-white dark:bg-[#0d1016] focus:outline-none text-black dark:text-[#2cce73] border dark:border-[#005704] hover:border-[#2CCE73] focus:border-[#2CCE73] py-1 px-4"><?php $section = file_get_contents('prompt.txt'); echo htmlentities($section); ?></textarea>
  </div>
    </div>
     </div>
   <!-- Separator -->
        <div class="row mb-4">
            <div class="col border-b border-[#2cce73]"></div>
        </div>
        
        <!-- Input form -->
        <div class="row mx-8 my-4">
            <div class="col-full w-full">
                
                <form method="post" action="/comfypwn/index.php?saveprompt=1" class="flex flex-wrap w-full">

                    <!-- Prompt -->
                    <label class="whitespace-nowrap text-black dark:text-[#2cce73]" for="param2">Prompt :</label>
                    <div class="flex gap-1 flex-col w-full mb-4">
                        
                        <textarea name="param2" id="param2" rows="5" required class="w-full rounded dark:bg-[#0d1016] border border-[#2CCE73] hover:border-[#2CCE73] focus:outline-none focus:border-[#2CCE73] text-black dark:text-[#2cce73] py-1 px-4"></textarea>
                    </div>

                    <!-- Save button -->
                    <div class="flex w-full">
                        <input type="submit" value="Save prompt" class="ml-auto bg-[#2CCE73] text-black dark:bg-transparent font-medium border border-white p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all text-white" role="button">
                    </div>


                </form>
                   
            </div>
            

        
   

        </div>
        
         </div>
         
         <!-- Separator -->
        <div class="row mt-4">
            <div class="col border-b border-[#2cce73]"></div>
        </div>        
        <!-- Separator -->
        <div class="row mt-4">
            <div class="col border-b border-[#2cce73]"></div>
        </div>


        <div class="row mx-8 ">
            <!-- Gif section -->
            <div class="flex flex-col w-full md:w-2/3 md:border-l border-[#2CCE73] pl-4 py-4">

                <!-- Image -->
                <img id="image" width="512" height="1024" src="./gif/test.gif"></img>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-center gap-2  gap-y-2 mt-4">
                    <button type="button" onclick="hide()" id="btnID" class="bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all" role="button">
                        Hide GIF
                    </button>
                    <button type="button" onclick="show()" id="btnID" class="bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all" role="button">
                        Show GIF
                    </button>
                    <button type="button" onclick="fetch('/txt2porngif/index.php?savegif=1'); customalert('GIF Saved') ;" class="bg-[#2CCE73] text-black dark:bg-transparent dark:text-[#2CCE73] font-medium border border-white  p-2 rounded dark:border dark:border-[#005704] hover:border-black dark:hover:border-[#2CCE73] focus:border-black dark:focus:border-[#2CCE73] transition-all" role="button">
                        Save GIF
                    </button>
                </div>

            </div>

      



<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" id="alert">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>



        

         

    <?php
    // Function to sanitize user input


    if (isset($_GET['gif']) && isset($_POST['target']) && isset($_POST['param1']) && isset($_POST['param2'])) {
        $param1 = escapeshellarg($_POST['param1']);
        $param2 = escapeshellarg($_POST['param2']);
        $target = escapeshellarg($_POST['target']);
        


        // Execute the script with the escaped parameters
        $output1 = shell_exec("proxychains -q bash /var/www/html/comfypwn/test.sh craft $target $param2 $param1");
      echo "<pre>$output1</pre>";
    }


   if (isset($_GET['saveprompt']) && isset($_POST['param2'])) {
   
        $param2 = "\n".$_POST['param2']."\n";
        $file = 'prompt.txt';



file_put_contents($file, $param2, FILE_APPEND | LOCK_EX);
    }
    ?>



    <script>
        function darkMode() {
            // let element = document.body;
            // let content = document.getElementById("DarkModetext");
            document.querySelector('html').className += " dark";

        }

        function lightMode() {
            // let element = document.body;
            // let content = document.getElementById("DarkModetext");
            // element.className += " dark";
            document.querySelector('html').className = "";

        }

        function show() {
            /* Access image by id and change
            the display property to block*/
            document.getElementById('image')
                .style.visibility = "";
        }

        function hide() {
            /* Access image by id and change
            the display property to block*/
            document.getElementById('image')
                .style.visibility = "hidden";
        }

           
                
                function showpr() {
            /* Access image by id and change
            the display property to block*/
            document.getElementById('prompts')
                .style.visibility = "";

        }

        function hidepr() {
            /* Access image by id and change
            the display property to block*/
            document.getElementById('prompts')
                .style.visibility = "hidden";
        }
        
                function showload() {
            /* Access image by id and change
            the display property to block*/
            document.getElementById('load')
                .style.visibility = "";

        }
        
                        function hideload() {
            /* Access image by id and change
            the display property to block*/
            document.getElementById('load')
                .style.visibility = "hidden";

        }

	function refreshgif() {
        var timestamp = new Date().getTime();
        var el = document.getElementById("image");
        el.src = "gif/test.gif?t=" + timestamp;
	}



        refreshgif();
	
	
	function changeselect(arr){
	var select = document.getElementById("param1");
	
	for(var i = 0; i < arr.length; i++) {
  	  var opt = arr[i];
  	  var el = document.createElement("option");
  	  el.textContent = opt;
  	  el.value = opt;
  	  select.appendChild(el);
  	  }
	}
	
	
	function loadmod() {
	
	var options = [];
	
	
	function fetchData() {
         var a = document.getElementById('target').value;
   	 return fetch('list.php?target=' + a)
            .then(response =>
                response.text().then(text => text.split(/\r|\n/)));
	}
	
	fetchData().then(arr => changeselect(arr));
	
	
	}
	
        

        document.querySelector('html').className += " dark";
        document.getElementById('image').style.visibility = "hidden";
        document.getElementById('timer').style.visibility = "hidden";
        
        
        
        function customalert(text) {
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

document.getElementById('alert').innerText = text
// When the user clicks the button, open the modal 

  modal.style.display = "block";


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}




var temps = 0

	function startime() {
	

const departMinutes = 0
const timerElement = document.getElementById("timer")
temps = departMinutes * 60

setInterval(() => {
  let minutes = parseInt(temps / 60, 10)
  let secondes = parseInt(temps % 60, 10)

  minutes = minutes < 10 ? "0" + minutes : minutes
  secondes = secondes < 10 ? "0" + secondes : secondes

  timerElement.innerText = `${minutes}:${secondes}`
  temps = temps + 1
}, 1000)
	}
	
startime()
	
	

function showtime(){
document.getElementById('timer').style.visibility = "";
temps = 0
}

function hidetime(){
document.getElementById('timer').style.visibility = "hidden";
}


function send(e,form) {
        customalert('Craft GIF') ;
        showload();
        showtime() ;
	fetch(form.action, {method:'post', body: new FormData(form)}).then((response) => customalert('Craft GIF&VID Terminé')).then((response) => hideload()).then((response) => hidetime()).then((response) => refreshgif()).then((response) => refreshvid());
	e.preventDefault();
	}


</script>
    </script>

</body>

</html>
