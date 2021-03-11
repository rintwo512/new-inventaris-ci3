

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found</title>    
   <style>   
    .img_err  img{
     position: absolute;
     top:10%;
     left:10%;
    }
    .content{      
      margin-top: 500px;
      text-align: center;
      font-size: 30px;
      font-family: sans-serif;
      color:#7E37D8;
    }
   
    .content .btn{
      text-decoration: none;      
      padding:8px 15px;
      font-size: 20px;
      outline: none;
      border-radius: 5px;
      border:1px solid #7E37D8;
      background-color:transparent;
      color: #7E37D8;
      cursor:pointer;
      transition: 0.5s all;
    }
    .content .btn:hover{
      background-color: #7E37D8;
      color:#fff;
    }
    @media screen and (max-width: 768px)
    {

      .img_err  img{
        position: relative;
        margin-top: 200px;
        margin-left: -30px;
        width:350px;      
      
       
      }
      .content .sub-content{
        font-size: 15px;
        margin-top: -490px;
        margin-left: -40px;
        
      }
      .content .btn{
      position: absolute;      
       left:40%;
       top:52%; 
        padding:5px 10px;
        font-size: 10px;
        outline: none;
        border-radius: 2px;       
      }
    }
   </style>   
  </head>
  <body>     
        
          <div class="img_err">
            <img src="<?=base_url('assets');?>/img/err.svg" alt="">
          </div>
          <div class="content">
            <p class="sub-content">Page not found</p>
          <a href="<?=base_url('airco');?>" class="btn">Back</a>
          </div>
        
   
  </body>
</html>