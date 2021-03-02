
<!DOCTYPE html>
<html lang="de-DE" prefix="og: https://ogp.me/ns#">
    <meta charset="UTF-8">
    <title>pranayvarmas</title>
    <meta name="description" content="Personal page of Pranay Varma Sunkari">
    <link rel="author" href="https://pranayvarmas.github.io" />
    <!--<link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">-->
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/theme.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
 <header class="fade-in">
        <div class="navigation-bar flex middle-xs">
            <img src="img/logo.png" class="logo">
            <nav class="end-xs">
                <ul>
                    <li><a href="#about-me">About me</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#follow-me">Follow me</a></li>
                </ul>
            </nav>
        </div>
        <div class="hero flex middle-xs" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url('img/pranaybw.jpg');
    }">
    <div class="hero-text ">
        <h1>Pranay Varma Sunkari</h1>
        <p>CSE, IIT Bombay</p>
        <?php $handle = fopen("counter.txt", "r"); if(!$handle){ echo "could not open the file" ; } else { $counter = ( int ) fread ($handle,20) ; fclose ($handle) ; $counter++ ; echo" <strong> you are visitor no ". $counter . " < /strong > " ; $handle = fopen("counter.txt", "w" ) ; fwrite($handle,$counter) ; fclose ($handle) ; } ?>
    </div>
</div>
</header>
<div class="wrapper">
    <main>
        <section class="intro" id="about-me">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <h2 class="section-title">About me</h2>
                    </div>
                </div>
                <div class="row margin-bottom ">
                    <div class="col-md">
                        <p>Hellooo..... I am Pranay, a second year UG in Computer Science and Engineering at IIT Bombay. </p>
                        <p>Please go through my Resume below</p>
                        <div class="row margin-bottom-small center-xs">
                        <div class="col-md"><b>Two Page Resume</b><br/><a href="https://drive.google.com/file/d/1a0bf4w_n5IQyY_HJPQuvof1uJqQWXqsC/view?usp=sharing"><button class="light">View</button></a><br/><a href="https://drive.google.com/uc?export=download&id=1a0bf4w_n5IQyY_HJPQuvof1uJqQWXqsC"><button class="light">Download</button></a></div>
                        <div class="col-md"><b>One Page Resume</b><br/><a href="https://drive.google.com/file/d/1vpnXqkwlS4hPgv28HqI7Xbsi0Wx3ObuB/view?usp=sharing"><button class="light">View</button></a><br/><a href="https://drive.google.com/uc?export=download&id=1vpnXqkwlS4hPgv28HqI7Xbsi0Wx3ObuB"><button class="light">Download</button></a></div>
                    </div>
                    </div>  
                    
                </div>
                <!--<div class="row team center-xs">
                    <div class="col-md">
                        <div class="hover-outer-box">
                            <img src="img/Romi-Kobe.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Romi Kobe</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href="#!" target="blank" rel="noopener"><img src="img/facebook-icon.svg" class="team-icon"></a> <a href="#!" target="blank" rel="noopener"><img src="img/twitter-icon.svg" class="team-icon"></a>
                                </div>
                            </div>
                        </div>
                        <p class="team-name">Romi Kobe<br/><span class="position">CEO</span></p>
                    </div>
                    <div class="col-md">
                        <div class="hover-outer-box">
                            <img src="img/Isaac-Desideria.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Isaac Desideria</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href="#!" target="blank" rel="noopener"><img src="img/facebook-icon.svg" class="team-icon"></a> <a href="#!" target="blank" rel="noopener"><img src="img/twitter-icon.svg" class="team-icon"></a>
                                </div>
                            </div>
                        </div>
                        <p class="team-name">Isaac Desideria<br/><span class="position">CTO</span></p>
                    </div>
                    <div class="col-md">
                        <div class="hover-outer-box">
                            <img src="img/Magda-Ilija.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Magda Ilija</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href="#!" target="blank" rel="noopener"><img src="img/facebook-icon.svg" class="team-icon"></a> <a href="#!" target="blank" rel="noopener"><img src="img/twitter-icon.svg" class="team-icon"></a>
                                </div>
                            </div>
                        </div>
                        <p class="team-name">Magda Ilija<br/><span class="position">CFO</span></p>
                    </div>
                </div>-->
            </div>
        <!--</section>
        <hr/>
        <section class="services" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center-xs">
                        <h2 class="section-title">Services</h2>
                    </div>
                </div>
                <div class="row icon-row">
                    <div class="col-xs center-xs">
                        <img src="img/001-achievement.svg" class="icon"><br/>
                        Service 1
                    </div>
                    <div class="col-xs center-xs">
                        <img src="img/002-pencil.svg" class="icon"><br/>
                        Service 2
                    </div>
                    <div class="col-xs center-xs">
                        <img src="img/003-idea.svg" class="icon"><br/>
                        Service 3
                    </div>
                </div>
                 <div class="row icon-row">
                    <div class="col-xs center-xs">
                        <img src="img/004-shopping-bag.svg" class="icon"><br/>
                        Service 4
                    </div>
                    <div class="col-xs center-xs">
                        <img src="img/005-fountain-pen.svg" class="icon"><br/>
                        Service 5
                    </div>
                </div>
                <div class="row margin-bottom ">
                    <div class="col-md">
                        <p class="highlight">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        <p class="author">- John Doe</p>
                    </div>
                    <div class="col-md">
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <div class="col-md">
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta middle-xs">
            <div class="container">
                <div class="row middle-md">
                    <div class="col-md-8">
                        <h2>Call to Action</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                        <a href=""><button class="light">Call to action</button></a>
                    </div>
                    <div class="col-md-4">
                        <img src="img/cta-display.png" class="display">
                    </div>
                </div>
            </div>
        </section>-->
        <section class="portfolio" id="projects">
            <div class="container">
                <div class="row center-xs">
                    <div class="col-md">
                        <h2 class="section-title">Projects</h2>
                        <div class="row margin-bottom-small center-xs">
                        <div class="col-md"><p><b>Xlr8</b></p><br/>XLR8 Robot Car<br/>Organized by Electronics and Robotics Club, IIT Bombay (2019)
                            <br/>Lead a team of 4 which studied and worked on the key aspects of bot mechanics and design<br/>Designed, Built
                            and Optimized bot for stable simulation on runway controlled by a Bluetooth enabled device</div>
                        <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img width="500" height="500"src="img/xlr8.png">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Xlr8</h3>
                                    <a href="https://drive.google.com/file/d/1IokgpLrSLBBJVH2fZ_tniVEzuICBWwIe/view?usp=sharing"><button class="light">Watch Video</button></a>
                                    <hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1IokgpLrSLBBJVH2fZ_tniVEzuICBWwIe"><button class="light">Download Video</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><p></p></div>
                <div><p></p></div>
                    <div class="row margin-bottom-small">
                        <div class="col-md"><p><b>Virtual Keyboard</b></p><br/>Institute Technical Summer Projects, Institute Technical Council | IIT Bombay<br/>Built a device which outputs the key pressed on paper printed keyboard (either by using camera lens or by
                        linear laser) according to the input frames using Image Processing<br/>Trained an image classification system and incorporated the OpenCV and NumPy modules of Python using a small database of self-recorded frames of the paper printed keyboard<br/>Programmed the device to simultaneously adjust the frames to locate finger position and run Image Processing Algorithms for accuracy in sensing the input frames<br/>Completed a sub-project named Invisible Cloak using OpenCV library for Image Identification, implemented Segmentation Algorithm, and generated mask for the segmented color of the foreground frame of the cloak with the background of the image, which produces an invisible effect in the video</div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img width="500" height="500"src="img/vk.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Virtual Keyboard</h3>
                                    <a href="https://drive.google.com/file/d/1A7r-Dw25GLoaOS7STTrafH6PVVFXKtyU/view?usp=sharing"><button class="light">Watch Video</button></a>
                                    <hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1A7r-Dw25GLoaOS7STTrafH6PVVFXKtyU"><button class="light">Download Video</button></a>
                                    <hr/>
                                    <a href="https://github.com/pranayvarmas/Virtual-Keyboard"><button class="light">Repository</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div><p></p></div>
                    <div><p></p></div>
                    <div class="row margin-bottom-small">
                        <div class="col-md"><p><b>Red Plag</b></p><br/>Guide: Prof. Amitabha Sanyal, CS251 Course Project | IIT Bombay<br/>Developed a program to perform latent semantic analysis to measure plagiarism between files<br/>Used bag of words strategy to extract signature vectors and calculated the Euclidean similarity between different vectors in the covariance matrix corresponding to data to find resemblance in the files<br/>Developed a UI using Django with User Authentication and also University Authentication with respective domains where input files can be uploaded<br/>Devised option for visualisation of data by a heat map using matplotlib and pandas on the input files</div>
                     <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img width="500" height="500" src="img/rp.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Red Plag</h3>
                                    <a href="https://pranayvarmas.pythonanywhere.com"><button class="light">Visit Website</button></a><hr/>
                                    <a href="https://github.com/pranayvarmas/Course-Project"><button class="light">Repository</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1FpyTV0bccbHvTclZWg6vSiC-L-PaJmTk"><button class="light">Download apk</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-4.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Projecttitle</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-5.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Projecttitle</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-6.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Projecttitle</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta">
                <div class="container">
                    <div class="row center-xs">
                        <div class="col-md">
                            <h2>Call to action</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <a href=""><button class="light">Call to action</button></a>
                        </div>
                    </div>
                </div>-->
            </section>
            <section class="portfolio" id="gallery">
            <div class="container">
                <div class="row center-xs">
                    <div class="col-md">
                        <h2 class="section-title">Gallery</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="padding-small">
                <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/1.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                   
                                    <a href="https://drive.google.com/file/d/1iSzP-GA5-UoBpQyfmIYCKIN7h1Yehubp/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1iSzP-GA5-UoBpQyfmIYCKIN7h1Yehubp"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><p></p></div>
                    <!--<div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/2.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Mumbai</h3>
                                    <p>Holi Celebrations</p>
                                    <a href="https://drive.google.com/file/d/1FC8tKzLDF5Hn0m3zkUfkD5uI9i6ILbFr/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1FC8tKzLDF5Hn0m3zkUfkD5uI9i6ILbFr"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/3.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <a href="https://drive.google.com/file/d/1P7Bf5yx017xP59H6Amvfsas9QozGsZqP/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1P7Bf5yx017xP59H6Amvfsas9QozGsZqP"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><p></p></div>
                    
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/4.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1eC6vwjsNnbi9YR-kkfTxzWx7Z5G01oo_/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1eC6vwjsNnbi9YR-kkfTxzWx7Z5G01oo_"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><p></p></div>
                    <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/5.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/11Em3L2MJFzW3xz-wQNAjubILMI7Jxs9v/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=11Em3L2MJFzW3xz-wQNAjubILMI7Jxs9v"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/6.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/15OO6gzPmpoGMV-RoV60yEc6vTttD4lex/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=15OO6gzPmpoGMV-RoV60yEc6vTttD4lex"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/7.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1FN89qPPo9gXidbAgu9SnffcKjzzT5K_m/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1FN89qPPo9gXidbAgu9SnffcKjzzT5K_m"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><p></p></div>
                    <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/12.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1MjQ_r7-c9EPD5oqwCHWZsoy49Lak29eK/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1MjQ_r7-c9EPD5oqwCHWZsoy49Lak29eK"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div><div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/9.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1m-LiT-tJL92wki1-vkNQSuQeRxVfkrG6/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1m-LiT-tJL92wki1-vkNQSuQeRxVfkrG6"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/10.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1HOjvLVOwd4iSO3wIFJpYOQCCbcUk83DR/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1HOjvLVOwd4iSO3wIFJpYOQCCbcUk83DR"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><p></p></div>
                    <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/11.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1C9kHyXeSmWMKKPU112weK8I5B9MOwdUA/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1C9kHyXeSmWMKKPU112weK8I5B9MOwdUA"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div><div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/8.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1q9A-ORIxiVXlEb5k2XU_Y0ph2vxU1rS3/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1q9A-ORIxiVXlEb5k2XU_Y0ph2vxU1rS3"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/13.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/12x6oY2ljPJHXP1tH5RkIS9eIzNOaQ8uv/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=12x6oY2ljPJHXP1tH5RkIS9eIzNOaQ8uv"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><p></p></div>
                    <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/14.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                   
                                    <a href="https://drive.google.com/file/d/1fVqIdZpPeLK9wMJRc0QykGUaq0uyxsE8/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1fVqIdZpPeLK9wMJRc0QykGUaq0uyxsE8"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div><div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/15.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1XZ0i5FukvaGAyK6bPipK1i39Ek4kA1bM/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1XZ0i5FukvaGAyK6bPipK1i39Ek4kA1bM"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div><div><p></p></div>
                    <div><p></p></div>
                     <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/2.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1vKb-WqOAqlQCMUg6WrujhgjVnO61s-pb/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1vKb-WqOAqlQCMUg6WrujhgjVnO61s-pb"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><p></p></div>
                    <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/16.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/116xJ9MgOBx9R6WChHzvsvDxgSJGj4AIY/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=116xJ9MgOBx9R6WChHzvsvDxgSJGj4AIY"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div><div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/17.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1Fc1UemoYe6QrPwER2oQ-8wy5pcx0c7fV/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1Fc1UemoYe6QrPwER2oQ-8wy5pcx0c7fV"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div><div><p></p></div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/18.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    
                                    <a href="https://drive.google.com/file/d/1EezRkOqNCweRE-wfD0gZKGQwB5YaOFMX/view?usp=sharing"><button class="light">View</button></a><hr/>
                                    <a href="https://drive.google.com/uc?export=download&id=1EezRkOqNCweRE-wfD0gZKGQwB5YaOFMX"><button class="light">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--<section class="blurbs" id="benefits">
                <div class="container">
                    <div class="row">
                        <div class="col-md center-xs">
                            <h2 class="section-title">Benefits</h2>
                        </div>
                    </div>
                    <div class="row margin-bottom-small center-xs">
                        <div class="col-md">
                            <img src="img/001-achievement.svg" class="icon ">
                            <h3>Benefit 1</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class="col-md">
                            <img src="img/002-pencil.svg" class="icon">
                            <h3>Benefit 2</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class="col-md">
                            <img src="img/003-idea.svg" class="icon">
                            <h3>Benefit 3</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                    <div class="row center-xs">
                        <div class="col-md">
                            <img src="img/004-shopping-bag.svg" class="icon">
                            <h3>Benefit 4</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class="col-md">
                            <img src="img/005-fountain-pen.svg" class="icon">
                            <h3>Benefit 5</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="newsletter">
                <div class="container">
                    <div class="row center-xs">
                        <div class="col-md ">
                            <h2>Our newsletter</h2>
                            <form class="flex center-xs">
                                <input placeholder="Enter Your Email" type="email" required="" name="">
                                <button>SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>-->
            <section class="contact" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md center-xs">
                            <h2 class="section-title">Contact</h2>
                        </div>
                    </div>
                    <div class="row margin-bottom-small center-xs">
                        <div class="col-md"><p><b>Email (Personal)</b></p><br/>pranay.sunkari15306@gmail.com</div>
                        <div class="col-md"><p><b>Address</b></p><br/>Room No. 603<br/>Hostel 16B<br/>IIT Bombay</div>
                        <div class="col-md"><p><b>Email (College)</b></p><br/>190050120@iitb.ac.in<br/>pranayvarmas@cse.iitb.ac.in</div>
                    </div>
                    <!--<form action="">
                        <div class="row margin-bottom-small center-xs">

                            <div class="col-md padding-small">
                                <div class="row">
                                    <div class="col-md">
                                        <input placeholder="Enter Your Name" type="text" name="" value="" class="margin-bottom-small">
                                        <input placeholder="Enter Your Email" type="email" name=""  value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md padding-small">
                                <textarea placeholder="Your Message" name="" rows="8" class="margin-bottom-small"></textarea>
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>-->
                </div>
            </section>
            <section class="contact" id="follow-me">
                <div class="container">
                    <div class="row">
                        <div class="col-md center-xs">
                            <h2 class="section-title">Follow me</h2>
                        </div>
                    </div>
                    <div class="row margin-bottom-small center-xs">
                        <div class="col-md"><a href="https://github.com/pranayvarmas/" target="_blank"><svg xmlns="https://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #333;">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></path>
                    </svg></a></div>
                        <div class="col-md"><a href="https://www.linkedin.com/in/pranay-varma-sunkari-58a108193/" target="_blank"><svg xmlns="https://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #0e76a8;">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></path>
                    </svg></a></div>
                        <div class="col-md"><a href="https://facebook.com/pranayvarma.sunkari" target="_blank"><svg xmlns="https://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #3b5998;">
                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></path>
                    </svg></a></div>
                        <div class="col-md"><a href="https://www.instagram.com/_pranay_varma_s_/?hl=en" target="_blank"><svg xmlns="https://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #bc2a8d;">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></path>
                    </svg></a></div>
                        <div class="col-md"><a href="https://twitter.com/pranayvarmas/" target="_blank"><svg xmlns="https://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #38A1F3;">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a></div>
                    </div>
                    <!--<form action="">
                        <div class="row margin-bottom-small center-xs">

                            <div class="col-md padding-small">
                                <div class="row">
                                    <div class="col-md">
                                        <input placeholder="Enter Your Name" type="text" name="" value="" class="margin-bottom-small">
                                        <input placeholder="Enter Your Email" type="email" name=""  value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md padding-small">
                                <textarea placeholder="Your Message" name="" rows="8" class="margin-bottom-small"></textarea>
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>-->
                </div>
            </section>
        </main>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md center-xs">
                    <img src="img/logof.png" class="margin-bottom" style="max-width: 150px;">
                </div>
            </div>
            <div class="row margin-bottom-small">
                <div class="col-md-8">
                    <h3>This Page</h3>
                    <p>The whole page is designed by me individually. This page is not an official blog; it just belongs to me</p><p>Feel free to mail me at any of the email mentioned above to suggest improvements, feedback, etc</p>
                    <p>Page created for personal use by pranayvarmas</p>
                </div>
                <div class="col-md-4">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#top">Home</a></li>
                        <li><a href="#about-me">About me</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#follow-me">Follow me</a></li>
                        <li><a href="https://pranayvarmas.github.io/old/"><b>Old Site</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="row secondary-footer">
        <div class="col-md">
         <p>Made with love ♥ by pranayvarmas © 2021.</p>                
     </div>
 </div>
 <script src="https://cdn.polyfill.io/v2/polyfill.min.js?callback=polyfillsAreLoaded" defer></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="js/script.js" defer></script>
</body>
</html>