<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Application</title>
	<!-- <link rel="stylesheet" href="<?=base_url('assets');?>/css/bootstrap.css"> -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,900&display=swap');
		body{
			background-image: url(./assets/img/welcome3.jpg);						
			background-size: cover;
			font-family: 'Poppins', sans-serif;		
		}
		.container{
			display: flex;
			justify-content:center;
			
		}
		.box{
			text-align: center;
			margin-top: 200px;						
		}
		.title{
			color:#7E37D8;
			letter-spacing: 2px;
			font-size: 40px;
		}
	
		.btn{
			text-decoration: none;
			width: 100%;
			padding:10px 20px;
			outline: none;
			border-radius: 5px;
			border:1px solid #7E37D8;
			background:linear-gradient(-45deg, transparent 0 calc(50% - 10px), aliceblue 
			calc(50% - 10px) calc(50% + 10px), #7E37D8 calc(50% - 10px) 100%);
			background-size: 250% 100%;
			background-position: 100% 50%;
			color: #7E37D8;
			cursor:pointer;
			transition: 0.5s all;
		}
		.btn:hover{
			background-position: 0% 50%;
			color:#fff;
		}
		@media screen and (max-width: 768px){
			body{
				background: aliceblue;
				
			}
			.box{
				margin-top:250px;
			}
			.title{			
			font-size: 20px;
			}
			.btn{
				padding:5px 10px;
				font-size:10px;
			}
		}
	</style>
</head>
<body>   
    <div class="container">
        <div class="box">            
                <h1 class="title" data-period="1000" ><span class="title_run" data-period="3000" data-type='["Welcome to your application"]'></span></h1>               
                <a class="btn" href="<?=base_url('auth');?>">Get Started</a>            
        </div>
    </div>
   <script>
   var textType = function(el, runText, periode){
        this.runText = runText;
        this.el =el;
        this.loopNum = 0;
        this.periode = parseInt(periode, 10) || 1000;
        this.txt = ' ';
        this.tick();
        this.isDeleting = false;
    };
    textType.prototype.tick = function(){
        var i = this.loopNum % this.runText.length;
        var fullText = this.runText[i];
        if(this.isDeleting){
            this.txt = fullText.substring(0, this.txt.length - 1);
        }else{
            this.txt = fullText.substring(0, this.txt.length + 1);
        }
        
        this.el.innerHTML = '<span class="rtx">'+this.txt+'</span>';
        var that = this;
        var dell = 10 - Math.random() + 50;
        if(this.isDeleting) { dell /= 1; }
        if(!this.isDeleting && this.txt === fullText){
            dell = this.periode;
            this.isDeleting = true;
        }else if(this.isDeleting && this.txt === ''){
            this.isDeleting = false;
            this.loopNum++;
            dell = 500;
        }
        setTimeout(function(){
            that.tick();
        }, dell);
    };
    window.onload = function(){
        var elements = document.getElementsByClassName('title_run');
        for(var i = 0; i<elements.length; i++){
            var runText = elements[i].getAttribute('data-type');
            var periode = elements[i].getAttribute('data-period');
            if(runText){
                new textType(elements[i], JSON.parse(runText), periode);
            }
        }
        
        var css = document.createElement('style');
        css.type = "text/css";
        css.innerHTML = ".title_run > .rtx {border-right: 0.05em solid #7E37D8}";
        document.body.appendChild(css);
    };
    
    
    
</script>
</body>
</html>