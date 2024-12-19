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
.card-body{
    border-bottom: 1px solid #EFEFEF;
    border-left: 1px solid #EFEFEF;
    border-right: 1px solid #EFEFEF;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
}
.card{
   border:none !important;
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

@media (max-width: 576px) {

 .cardblock {
    margin-top: 1rem;
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
    height: 300px;
}
.card-img-top{
    height:100%;
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
        .updated-date {
                    color: #E6901D !important;
                }

                @media (max-width:576px){
#blogdetcontainer{
    padding-top: 4rem;
}
.blog-cards{
    display: block;
}
.blog-cards .col-md-4{
    margin: auto;
}
#blogdetcontainer img{
height:300px;
}
}

            .card-text {
                padding-top: 20px;
                color: #000 !important;
            }

            .card-title {
                color: #000 !important;
            }

            .card-body {
                /*background-color: #101010;*/
                padding-left: 0px;
                padding-right: 0px;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .card {
                border: none;
            }

            .readmore {
                color: #00F0FF;
            }
            #blogdetcontainer{
    padding-top: 7rem;
}
   </style>
</head>
<body>

   
 
<?php
include_once "./header.php";
?>
<!-- ------------------------- -->
<div class="container" id="blogdetcontainer">
       
</div>
<div class="blog-cards mb-5 container" id="blogCards">

     
       

</div>

<!-- --------------------------------- -->
<?php
include_once "./footer.php";
?>
       
       <script>
    function fetchAndDisplayData() {
        // Get the blog post ID from the URL query parameter
        const urlParams = new URLSearchParams(window.location.search);
        const postId = urlParams.get('id');
        console.log(postId);

        // Fetch the blog post details using the postId
        fetch(`https://backendapi.rainbowmedia.co.in/find-blog/${postId}`)
            .then(response => response.json())
            .then(blogPost => {
                const imagePath = "https://backendapi.rainbowmedia.co.in//upload/";
                const findet = blogPost.findblog;
                console.log(findet);

                // Get the container element
                const blogdetcontainer = document.getElementById('blogdetcontainer');

                // Create the row element
                const row = document.createElement('div');
                row.classList.add('row');

                // Create the image column
                const columnImage = document.createElement('div');
                columnImage.style.margin = 'auto';

                const blogImage = document.createElement('img');
                blogImage.src = imagePath + findet.banner_image;
                blogImage.classList.add('img-fluid');
                blogImage.alt = findet.title;

                // Adjust width to 100% and height dynamically
                blogImage.style.width = '100%';
                blogImage.style.objectFit = 'cover'; // Ensures no distortion by cropping
                blogImage.style.objectPosition = 'center'; // Centers the image content

                // Function to set height based on screen width
                function setResponsiveHeight() {
                    if (window.innerWidth < 575) { // Mobile view
                        blogImage.style.height = '45vh'; // 45% of viewport height
                    } else {
                        blogImage.style.height = '55vh'; // 55% of viewport height
                    }
                }

                // Initial height setup and responsive handling
                setResponsiveHeight();
                window.addEventListener('resize', setResponsiveHeight);

                columnImage.appendChild(blogImage);
                row.appendChild(columnImage); // Append the image column first

                // Create the title and description column
                const columnContent = document.createElement('div');
                columnContent.classList.add('col-md-10', 'mx-auto', 'mt-5');

                // Add the title
                const blogTitle = document.createElement('h2');
                blogTitle.innerText = findet.title;
                blogTitle.style.color = '#D32F2F'; // Sets the text color to red
                blogTitle.style.fontWeight = 'bold'; // Optionally make the font bold
               

                // Add the meta description
                const blogParas = document.createElement('p');
                blogParas.innerText = findet.description;
                blogParas.style.color = '#425466';

                // Add the main content
                const blogPara = document.createElement('p');
                blogPara.classList.add('main-content');
                blogPara.innerText = findet.meta_description;

                // Append content to the column
                columnContent.appendChild(blogTitle);
                columnContent.appendChild(blogParas);
                columnContent.appendChild(blogPara);

                // Append the content column to the row
                row.appendChild(columnContent);

                // Append the row to the container
                blogdetcontainer.appendChild(row);
            })
            .catch(error => {
                console.error('Error fetching blog post:', error);
            });
    }

    // Call the function to fetch and display the data
    fetchAndDisplayData();
</script>


<!-- ------------------------------------------------------------------------------- -->
<script>
    function fetchAndDisplayDat() {
     const apiUrl='https://backendapi.rainbowmedia.co.in/list-blog?timestamp=${Date.now()}`';
 fetch(apiUrl)
.then(response => response.json()) // Parse the JSON response
.then(data => {
console.log(data);
const blogContainer = document.getElementById('blogCards');

const reversedPosts = data.listblog;

// Loop through each blog post
for (let i = 1; i < 4; i++) {
 const blogPost = reversedPosts[i];
 
 // Create elements for the blog post
 const blogCard = document.createElement('div');
 blogCard.classList.add('col-md-4', 'card');
 const imagePath="https://backendapi.rainbowmedia.co.in//upload/";
 const blogContent = `
 <div class="cardblock">
     <img class="card-img-top" src="${imagePath+blogPost.banner_image}" alt="Card image cap">
 </div>
     <div class="card-body">
         <h5 class="card-title">${blogPost.title}</h5>
         

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
fetchAndDisplayDat();
</script>

            </body>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
          
            </html>
            