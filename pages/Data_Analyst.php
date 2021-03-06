<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="stuff, to, help, search, engines, not" name="keywords">
<meta content="What this page is about." name="description">
<meta content="Display Webcam Stream" name="title">
    <title>InterviewPrep.ai</title>
<style type="text/css">
        body{
            font-family: verdana;
        }
        #result1{
            height:200px;
           
            padding: 10px;
            box-shadow: 0 0 0px 0 white;
            margin-bottom: 30px;
            font-size: 14px;
            line-height: 25px;
        }
        button{
            font-size:20px;
            position: absolute;
            top: 240px;
            left: 50%
        }
</style>
<style>
#container {
    margin: 0px auto;
    width: 500px;
    height: 375px;
    border: 10px #333 solid;
}
#videoElement {
    margin:0px auto;
    width: 675px;
    height: 400px;
    background-color: white;
}
</style>    
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
   
        <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="../js/voicetotext.js">
    </script>
     <script>
        var nes; 
        nes =0;
        var questions =["Tell me about yourself.",
                        "why are you applying for this job?",
                        "What is your strongest programming language (Java, ASP, C, C++, VB, HTML, C#, etc.)?",
                        "Why should we hire you?",
                        "Why do you want to work here?",
                        "What is your greatest weakness?"]
                    function nextQuestion() {
                        if (nes<6){
                             document.getElementById("demo1").innerHTML = questions[nes];
                                 nes=nes+1;
                        }

                       
                    } 

                    var lol=document.getElementById("submit1");
                    
                 

                    function change() // no ';' here
                    {
                        var elem = document.getElementById("button2");
                        if (nes==5){
                              
                           
                            elem.value = "Submit";
                        } 
                       else if(nes==6){
                            alert(90-((avganger+avgsad+avgfear)+(avgdisgust*0.011)))
                              onStop(); 
                        }
                        
                    }
                    function multifunction() {
                        onStart();
                        change();
                        startConverting();
                        responsiveVoice.speak(questions[nes]);
                        nextQuestion();
                    }
    </script>
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body >

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0 ; background-color:  white">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HOME</a>
                <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<!--       <a class="navbar-brand" href="#">About us</a>
 -->    </div>
            </div>
            <!-- /.navbar-header -->

            <!-- <ul class="nav navbar-top-links navbar-right"> -->
              
                <!-- /.dropdown -->
               <!--  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-user -->
                <!-- </li> -->
                <!-- /.dropdown -->
            <!-- </ul> -->
            <!-- /.navbar-top-links -->

             <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Data Scientist</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Developer<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href=" Android_Developer.php">Android Developer</a>
                                </li>
                                <li>
                                    <a href="Web_Developer.php">Web Developer</a>
                                </li>
                                <li>
                                    <a href="java.php">Java </a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="Data_Analyst.php"><i class="fa fa-table fa-fw"></i>Data Analyst</a>
                        </li>
                        <li>
                            <a href="Finance.php"><i class="fa fa-edit fa-fw"></i>Finance</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Welcome to InterviewPrep.ai</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Question
                        </div>
                        <div class="panel-body">
                            <p  id ="demo1">Welcome to the InterviewPrep.ai</p>
                        </div>
                        <div class="panel-footer">
                            <p>
                                <input onclick='multifunction()' type='button' class="btn btn-info" value='Next' id="button2" />
                                <input onclick='multifunction2()' type='button' class="btn btn-info" id="submit1" style="opacity: 0" value='Submit' />
                             <!--    <script>
                                        document.write("<input onclick='responsiveVoice.speak("What do you know about Machine learning");' type='button' class="btn btn-info" value='Next' />")
                                </script>
                                 -->

                            </p>
                        </div>
                    </div>
                </div>
            
            <div class="row">
                <div class="col-lg-7">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Webcam
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body"id="affdex_elements" style="width:400px;height:510px; padding-left: 33px ">
                               
                        </div>
                    </div>
                        <!-- /.panel-body -->
                </div>
                    <!-- /.panel -->
            
                 <div class="col-lg-5" style="padding-bottom: 0px">
                      <div class="panel panel-info">
                        <div class="panel-heading">
                            Transcripts
                        </div>
                        <!--  -->
                       
                        <!--  -->
                             <div class="panel-body" id = "result1">
                             </div>
                             
<!--                          <textarea class="form-control" rows="5" id="" style="resize: none" ></textarea></div> 
 -->
                        <button id="refresh"  onclick="startConverting() " style="opacity: 0;padding-bottom: 0px"><i class="fa fa-microphone"></i></button>
                        

                        </div>
                       
                    </div>
                </div>
                        </div>

                        <!-- /.panel-body -->
                    </div>
         
                        <!-- /.panel-body -->
                        
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    <!-- jQuery -->

    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://download.affectiva.com/js/3.2.1/affdex.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
    var avgsad=0,avgdisgust=0,avgfear=0,avganger=0,avgattention=0;
    var totsad=0,totdisgust=0,totfear=0,totanger=0,totattention=0;
    var a=0,b=0,c=0,d=0,e=0;
          // SDK Needs to create video and canvas nodes in the DOM in order to function
      // Here we are adding those nodes a predefined div.
      var divRoot = $("#affdex_elements")[0];
      var width = 640;
      var height = 480;
      var faceMode = affdex.FaceDetectorMode.LARGE_FACES;
      //Construct a CameraDetector and specify the image width / height and face detector mode.
      var detector = new affdex.CameraDetector(divRoot, width, height, faceMode);

      //Enable detection of all Expressions, Emotions and Emojis classifiers.
      detector.detectAllEmotions();
      detector.detectAllExpressions();
      detector.detectAllEmojis();
      detector.detectAllAppearance();

      //Add a callback to notify when the detector is initialized and ready for runing.
      detector.addEventListener("onInitializeSuccess", function() {
        // log('#logs', "The detector reports initialized");
        //Display canvas instead of video feed because we want to draw the feature points on it
        $("#face_video_canvas").css("display", "block");
        $("#face_video").css("display", "none");
      });

      function log(node_name, msg) {
        $(node_name).append("<span>" + msg + "</span><br />")
      }

      //function executes when Start button is pushed.
      function onStart() {
        if (detector && !detector.isRunning) {
          $("#logs").html("");
          detector.start();
        }
        // log('#logs', "Clicked the start button");
      }

      //function executes when the Stop button is pushed.
      function onStop() {
        // log('#logs', "Clicked the stop button");
        if (detector && detector.isRunning) {
          detector.removeEventListener();
          detector.stop();
        }
      };

      //function executes when the Reset button is pushed.
      function onReset() {
        // log('#logs', "Clicked the reset button");
        if (detector && detector.isRunning) {
          detector.reset();

          // $('#results').html("");
        }
      };

      //Add a callback to notify when camera access is allowed
      detector.addEventListener("onWebcamConnectSuccess", function() {
        // log('#logs', "Webcam access allowed");
      });

      //Add a callback to notify when camera access is denied
      detector.addEventListener("onWebcamConnectFailure", function() {
        // log('#logs', "webcam denied");
        // console.log("Webcam access denied");
      });

      //Add a callback to notify when detector is stopped
      detector.addEventListener("onStopSuccess", function() {
        // log('#logs', "The detector reports stopped");
        // $("#results").html("");
      });

     detector.addEventListener("onImageResultsSuccess", function(faces, image, timestamp) {
        // $('#results').html("");
        // log('#results', "Timestamp: " + timestamp.toFixed(2));
        // log('#results', "Number of faces found: " + faces.length);
        if (faces.length > 0) {
          // log('#results', "Appearance: " + JSON.stringify(faces[0].appearance));
          
          console.log('#results', "sadness: " + JSON.stringify(faces[0].emotions["sadness"], function(key, val) {
            a+=1;
            totsad += Number(val.toFixed(0));
            avgsad = totsad / a;
            console.log("totsad",avgsad);
            return val.toFixed ? Number(val.toFixed(0)) : val;
          }));
          console.log('#results', "disgust: " + JSON.stringify(faces[0].emotions["disgust"], function(key, val) {
            b+=1;
            totdisgust += Number(val.toFixed(0));
            avgdisgust = totdisgust / b;
            console.log("totdisgust",avgdisgust);
            return val.toFixed ? Number(val.toFixed(0)) : val;
          }));
          console.log('#results', "fear: " + JSON.stringify(faces[0].emotions["fear"], function(key, val) {
            c+=1;
            totfear += Number(val.toFixed(0));
            avgfear = totfear / c;
            console.log("totfear",avgfear);
            return val.toFixed ? Number(val.toFixed(0)) : val;
          }));
          console.log('#results', "anger: " + JSON.stringify(faces[0].emotions["anger"], function(key, val) {
            d+=1;
            totanger += Number(val.toFixed(0));
            avganger = totanger / d;
            console.log("totanger",avgattention);
            return val.toFixed ? Number(val.toFixed(0)) : val;
          }));
          console.log('#results', "attention: " + JSON.stringify(faces[0].expressions["attention"], function(key, val) {
            e+=1;
            totattention += Number(val.toFixed(0));
            avgattention = totattention / e;
            console.log("totattention",avgattention);
            return val.toFixed ? Number(val.toFixed(0)) : val;
          }));
          log('#results', "Expressions: " + JSON.stringify(faces[0].expressions, function(key, val) {
            return val.toFixed ? Number(val.toFixed(0)) : val;
          }));
          // log('#results', "Emoji: " + faces[0].emojis.dominantEmoji);
          // if($('#face_video_canvas')[0] != null)
          //   drawFeaturePoints(image, faces[0].featurePoints);
        }
      });


      // Draw the detected facial feature points on the image
      // function drawFeaturePoints(img, featurePoints) {
      //   var contxt = $('#face_video_canvas')[0].getContext('2d');

      //   var hRatio = contxt.canvas.width / img.width;
      //   var vRatio = contxt.canvas.height / img.height;
      //   var ratio = Math.min(hRatio, vRatio);

      //   contxt.strokeStyle = "#FFFFFF";
      //   for (var id in featurePoints) {
      //     contxt.beginPath();
      //     contxt.arc(featurePoints[id].x,
      //       featurePoints[id].y, 2, 0, 2 * Math.PI);
      //     contxt.stroke();

      //   }
      // }

  </script>
   <script type="text/javascript">
        var r=document.getElementById('result1');
        var myVar = setInterval(refresh, 30000);
        function refresh(){
            document.getElementById("refresh").click();
        }
        function startConverting(){
            if('webkitSpeechRecognition' in window){
            var speechRecognizer = new webkitSpeechRecognition();
            speechRecognizer.continuous=true;
            speechRecognizer.interimResults = true;
            speechRecognizer.lan = 'en-IN';
            speechRecognizer.start();

            var finalTranscripts = '';
            var total = '';
            speechRecognizer.onresult = function(event){
                var interimTranscripts = '';
                for(var i=0;i < event.results.length;i++){
                    var transcript = event.results[i][0].transcript;
                    transcript.replace("\n","<br>");
                    if(event.results[i].isFinal){
                        finalTranscripts += transcript;
                    }else{
                        interimTranscripts += transcript;
                    }


                }
                total += finalTranscripts;
                console.log(total);
                r.innerHTML = finalTranscripts + '<span style="color:#999">' + interimTranscripts + '</span>';
                
            };
            speechRecognizer.onerror = function(event){

            }
        }
        else{
            r.innerHTML = 'Your browser doesnt support this feature'; 
        }
        }

        
    </script>
<!--  -->
</body>

</html>
