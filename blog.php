<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="icon" type="image/x-icon" href="./images/RM favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./contact-style.css">
    <script src="https://kit.fontawesome.com/02ea2f3995.js" crossorigin="anonymous"></script>
    <title>Blog</title>
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
       .bg-dark{
    height:70px;
    padding:13px 0;
   background-color: #fff;
    position: fixed !important;
    width:100%;
}
    .navbar-dark .navbar-nav .nav-link {
  color:#000;
  font-size:18px;
}
.navbar-dark .navbar-nav .nav-link:hover {
color:#fd363d !important;
}
.navbar-dark .navbar-nav .nav-link.active {
  color:#fd363d;
}
.foot {
display: flex;
}
@media (max-width:500px){
  .foot {
display: block;;
}}
@media (min-width: 576px){
    .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}

}
   
.blog-cards {
    gap: 15px;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.blog-cards .col-md-4 {
    flex-basis: calc(33.33% - 10px); /* Set the basis for flex items to occupy one-third of the container width with some spacing */
    margin-bottom: 20px; /* Add bottom margin for spacing between rows */
    box-sizing: border-box; /* Ensure padding and border are included in the width calculation */
}
.cardblock{
    height: 400px;
}
.card-img-top{
    height:100%;
}
.card-body{
    border-bottom: 1px solid #EFEFEF;
    border-left: 1px solid #EFEFEF;
    border-right: 1px solid #EFEFEF;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
}
.card-body a{
    color: #50A9A3 !important;
}
/* ------------------------------- */
        .silver-glow-head {
            font-size: 48px;
            /* Adjust the font size as needed */
            text-align: center;
            /* Center the text */
            background: linear-gradient(to right, #778486, #3a433f);
            /* Black background */
            -webkit-background-clip: text;
            /* Clip the background to the text for WebKit browsers */
            color: transparent;
            /* Hide the original text color */
            background-clip: text;
            /* Clip the background to the text */
            animation: glow 2s ease-in-out infinite alternate;
            /* Animation for the glow effect */
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 5px #69797b, 0 0 5px#3a433f, 0 0 5px #69797b;
            }

            100% {
                text-shadow: 0 0 3px #3a433f, 0 0 3px #69797b, 0 0 3px #3a433f;
            }
        }


@media (max-width:576px){
.bannerimg{
    padding-top: 6rem;
}
.blog-cards{
    display: block;
}
.blog-cards .col-md-4{
    margin: auto;
}
}
#blogCards{
    max-width: 1300px;
    /* padding-top: 7rem; */
    margin: auto
}
.card-text{
    color:#004441;
}
.card-title{
    font-family:SemiBold ;
}
.card{
   border:none !important;
}
/* .card .col-md-4{
    padding-top: 15px;
} */
 a:hover{
    color: #FFFF;
    text-decoration: none;
 }
 .blogbanner{
    background-color: #FFF8F8;
    padding:7rem 0;
    overflow-x: hidden;
 }
 .blogbanner p{
width:50%;
margin:auto;
 }
 .blogbanner h1{
    color: #D32F2F;
 }

 @media (max-width: 576px) {
    .blogbanner p{
width:90%;
 }
 .cardblock {
    margin-top: 1rem;
 }
 .blogbanner {
    padding: 3rem 0;
}
}
   </style>
</head>
<body>

   
 
<?php
include_once "./header.php";
?>
<div class="blogbanner">
   <div class="row">
    <div class="col-md-1 col-sm-1">
    <img src="./image/blog.png" alt="blog" >
    </div>
    <div class="col-md-11 col-sm-11" style="text-align: center;">
    <h1>Insights<span> <img src="./image/Star.png" alt="blog" ></span>Trends<span> <img src="./image/Star.png" alt="blog" ></span>Inspiration</h1>
    <p>Stay updated with the latest in digital marketing, branding, and more. Explore our blogs for expert tips and industry insights that help you stay ahead</p>
    </div>
   </div> 
</div>
<div class="blog-cards mb-5" id="blogCards"></div>
  <script>
    function fetchAndDisplayData() {
     const apiUrl=`https://backendapi.rainbowmedia.co.in/list-blog?timestamp=${Date.now()}`;
 fetch(apiUrl)
.then(response => response.json()) // Parse the JSON response
.then(data => {
console.log(data);
const blogContainer = document.getElementById('blogCards');

const reversedPosts = data.listblog;

// Loop through each blog post
for (let i = 0; i < reversedPosts.length; i++) {
 const blogPost = reversedPosts[i];
 
 // Create elements for the blog post
 const blogCard = document.createElement('div');
 blogCard.classList.add('col-md-4', 'card');
 const imagePath="https://backendapi.rainbowmedia.co.in//upload/";
 const blogContent = `
 <div class="cardblock">
     <img class="card-img-top " src="${imagePath+blogPost.banner_image}" alt="Card image cap">
 </div>
     <div class="card-body">
         <h5 class="card-title" style="color: #000000;font-weight:700">${blogPost.title}</h5>
       

         <a href="blog_detail.php?id=${blogPost._id}" class="readmore"  style="text-decoration: none !important;">Read More ></a>

     </div>
  
 `;
 
 // Add the blog content to the card
 blogCard.innerHTML = blogContent;

 // Append the blog card to the container
 blogContainer.appendChild(blogCard);
}
})
.catch(error => {
console.error('There was a problem with the fetch operation:', error);
});
}
// Call the function initially to load the data
fetchAndDisplayData();


</script>      
<?php
include_once "./footer.php";
?>
       


            </body>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
          
            </html>
            