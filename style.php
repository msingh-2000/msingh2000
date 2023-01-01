<style>
@font-face {
    font-family: logoFont; 
    src: url(fonts/SecularOne-Regular.ttf);
}
@font-face {
    font-family: lightfont;
    src: url(fonts/Manrope-Regular.ttf);
}
@font-face {
    font-family: boldfont;
    src: url(fonts/Manrope-SemiBold.ttf);
}
:root{
    --color-1: black;
    --black: rgba(0, 0, 0, 0.88);
    --color-2:#82CD47;
    --toxic:#39FF14;
  }
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
}
body{
    background-color:white !important;
    /* background-color: rgba(255, 255, 0, 0.438); */
}

/* NAVIGATION BAR BLINK ANIMATION */


/*NavigationBar CSS*/

.navbar {
    display: flex;
    width: 100%;
    justify-content: space-around;
   background-color: none;
    align-items: center;
    height:50px;
    top:0;
   
}
.navbg{
    background-color:var(--black);
    backdrop-filter: blur(10px); 
    position: sticky;
    padding: 0;
    margin:0;
    top:0;
    z-index: 9999;
}

.nav-list{
    list-style-type: none;
    
}
.nav-list , .list-item{
display: inline-block;
padding :20px 30px 20px 30px;
}
.navbar a{
    color:#cccccc;
    text-decoration: none;
    
}
.list-item{
    font-family: lightFont;
    font-size: 14px;
}
.logo a{
    color:var(--toxic);
    font-size:20px;
    display: flex;
    font-family: lightFont;
    font-weight: lighter;
    align-items: center;
}
.navbar li:hover {
    transition: 0.4s ease;
    cursor: pointer;
    }
    .navbar li:hover > a{
        color:white;
        cursor: pointer;
        transition: 0.4s ease;
    }
    #logoimg:hover{
        filter: drop-shadow(0px 0px 5px var(--toxic));
        cursor: pointer;
        transition: 0.2s ;
    }
    .menu{
       display:none;
    }
    .menu-line{
        width:30px;
        height:1px;
        background-color: white;
        margin-bottom: 10px;
    }
.Blink{
    animation:animate 5s linear infinite;  
  }
  .logo:hover  .noBlink{
    text-shadow:0 0 2px var(--toxic);
    transition: 0.2s ;
  }
  .logo:hover .Blink{
    animation: none;
    text-shadow:0 0 2px var(--toxic);
  }

@keyframes animate{
    0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
    {
        color:#0f570f;
        text-shadow: none;
       
    }
    18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%{
        color:var(--toxic);
        text-shadow:0 0 2px var(--toxic);
    
    }
}  

/* NAVIGATION BAR FOR MOBILE */
@media all and (max-width:1000px)
{
    .navbar{
        flex-direction: column;
        padding:20px;
        position: sticky !important;
        overflow: hidden;
        height:100%;
        background-color: black;
    }
    .menu{
        display:block;
        position: absolute;
        right:30px;
        top:30px;
        z-index: 999;
    }
    .menu:hover{
        cursor: pointer;
    }
    .list-item{
        display:block;
        z-index: 999;
        left:0;
        font-size: 18px;
      
        
    }
    .logo a{
        display: hidden;
    }

    .nav-list{
        width:100%;
        text-align: left;
        display: none;
        height:900px;
       
    }
    .active{
        display: block;
    } 
    #rightbox{
        font-size: 50px !important;
    }
   
}

/* TOGGLE BUTTON ANIMATION */
.openmenu #line-1{
    transform: rotate(-45deg) translate(-7px);
    transition: 0.5s ease;
}
.openmenu #line-3{
    transform: rotate(45deg) translate(-7px);
    transition: 0.5s ease;
}



/* 
TOP SECTION */
.sectionTop{
    margin-top: -50px;
    text-align: center;
}
@media all and (max-width:1000px)
{
    .sectionTop{
        margin-top:0px;
    }
    .sectionTop .heading{
        background-size: cover;
        background-position: center;
    }
}
.heading{
    font-family: boldFont;
    font-size:30px;
    padding:100px;
    color: white;
    background-image: url("../assets/topbg4low.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    backdrop-filter: brightness(10%);

}

@media (max-width:550px) {
    .heading{padding:0px;}
    
}
.searchBar{
    font-family: lightFont;
    font-size:2vw;
    color: white;
    padding:10px;
    text-align: center;
}
.sectionTwo{
    background-color: white;
    text-align: center;

}



/* GRID CSS START */

.gridHead{
    font-family: lightFont;
    font-size: 40px;
    padding: 10px;
}
.grid{
    display: grid;
    grid-gap: 10px;
    padding: 16px;
    
}
.grid a{
    text-decoration: none;
    color:black;
}
.grid h3{
    
    padding:10px;
}
.grid .col{
    border-radius: 10px;
}
.grid .col:hover img{

    opacity: 80%;
    transition: 0.3s ease;
}
.grid .col:hover h3{
    color:#ffe04e;
    transition: 0.3s ease;
}
    @media (min-width:768px) {
        .grid{grid-template-columns:repeat(2,1fr);}
    }
    @media (min-width:960px) {
        .grid{grid-template-columns:repeat(3,1fr);}
    }
    @media (min-width:1350px) {
        .grid{grid-template-columns:repeat(4,1fr);}
    }
 .col{
       
        padding:10px;
        font-family: lightFont;
    }
.col img{
    width:200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
}

  /* GRID END */



.linksTop{
    text-decoration: none;
    color: black;
    font-size: 16px;
    padding:15px;
    border: 1px solid white;
    background-color: white;
    margin:10px;
    border-radius: 5px;
   
}
.linksTop:hover{
    border:1px solid black;
    transition: 0.3s ease;
    color:white;
    background-color: black;

}
.flex-item{
    flex:50%;
}

@media all and (max-width:1000px)
{
    .flex-container{
        flex-direction: column;
    }
    .flex-container #leftbox{width:100%;
    padding:0px;}
    .container{
        flex-direction: column;
        width: 100%;
        overflow: hidden;
        align-items: center;
    }
    .container .items{
        width:100%;
        margin: 10px;
    }
    .container .items img{
        object-fit: cover;
    }
    
    
    
}



.paragraph{
    font-family: lightFont;
    padding:20px;
    font-size: 20px;
}
.options {
    font-family: lightFont;
    font-size:20px;
    padding:40px;
    text-align: center;

}
.options span {
    padding : 20px;
    background :black ; 
    color : white;
    font-size : 1.2em;
    font-variant : small-caps;
    cursor : pointer;
    display: block;
  }
  .options span::after {
    float: right;
    right: 10%;
    content: "+";
  }
  .moreList {
    clear:both;
    width:100%;
    background-color: #f5f5f5;
    height:0px;
    overflow: hidden;
    text-align: center;
    transition: height .4s ease;
  }
  .moreList a{
    text-decoration: none;
    color:black;
    font-size: 20px;
  }
  .moreList li{
    margin: 10px;
  }
  #more {position: absolute; opacity: 0; height: 0px;}    

#more:checked + .moreList {height: 200px;} 
.moreList{
    list-style: none;
}



/* Footer Section */
footer{
    /* background-color:var(--black); */
}
.footer-container{
    background-color: rgba(0, 0, 0);
    color:white;
    display: flex;
}
.sections{
    width:30%;
    text-align: left;
    font-family: lightFont;
    font-size: 20px;
    padding: 30px;
}
.sections ul {
    list-style-type: none;
    text-align: left;
    margin-top: 10px;
    
}
.sections ul li a{
    text-decoration: none;
    color:#cccccc;
    font-size: 15px;
}
.links:hover{
    color:white;
    transition: 0.4s;
}
.sections p {
    color:#cccccc;
    margin-top: 10px;
    font-size: 15px;
}
.socialLinks{
    text-align: center;
    color:white;
    background-color: rgba(0, 0, 0);
}
.socialLinks img{
    padding: 5px;
}
.s-links:hover{
    
    filter: drop-shadow(0px 0px 10px  rgb(233, 233, 233, 0.50));
    transition: 0.2s;
}
.copyright{
    background-color: rgba(0, 0, 0);
    color: #cccccc;
    padding: 20px;
    font-size: 12px;
    font-family: lightFont;
    text-align: center;
}
@media  (max-width:800px)
{
    .sections{
        width:100%;
    }
    .footer-container{
        flex-direction: column;
    }

}
@media  (min-width:1000px)
{
    .sections{
        width:100%;
    }

}
</style>