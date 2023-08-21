<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/navbar-menu-other.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/web-dev.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Campusnetic Solutions | Imagine Beyond Imaginations</title>
        <link href="images/favicon.webp" rel="icon">
<style>

    h2,h3,h4,h5,h6{
        font-weight: 700;
        font-family: 'Titillium Web', sans-serif; 
    }

    .con-head{
        font-weight: 700;
        line-height: 1.2;
    }
    
 .tabs {
	 margin: 4rem auto;
	 width: 100%;
        font-family: 'Titillium Web', sans-serif; 
	 max-width: 1130px;
}
 .tabs .tabsBody {
	 margin: 0;
	 padding: 0;
	 zoom: 1;
     font-family: 'Titillium Web', sans-serif; 

}
 .tabs .tabsBody:after {
	 clear: both;
	 content: "";
	 display: table;
     font-family: 'Titillium Web', sans-serif; 

}
 .tabs .tabsBody li {
	 margin: 0;
	 display: inline;
     font-family: 'Titillium Web', sans-serif; 

}
 .tabs .tabsBody li .tabHeader {
	 border: none;
	 background: none;
	 border-bottom: 4px solid #f2f2f2;
	 transition: 0.5s;
	 margin: 0;
     font-size: 22px;
	 padding: 20px 0.4em 10px;
	 cursor: pointer;
	 font-weight: 800;
	 display: inline-flex;
	 color: #004696;
	 width: 18%;
	 white-space: nowrap;
	 justify-content: space-between;
	 align-items: center;
	 user-select: none;
	 position: relative;
	 transition: 0.3s;
     font-family: 'Titillium Web', sans-serif; 

}
 .tabs .tabsBody li .tabHeader::before {
	 content: "";
	 background: #009cdd;
	 display: block;
	 position: absolute;
	 height: 4px;
	 right: 0;
	 bottom: -4px;
	 left: 0;
	 z-index: 1;
	 transition: transform 0.5s;
	 transform: scale(0, 1);
	 transform-origin: bottom right;
     font-family: 'Titillium Web', sans-serif; 

}
 .tabs .tabsBody li .tabHeader:hover::before, .tabs .tabsBody li .tabHeader:focus::before, .tabs .tabsBody li .tabHeader.active::before {
	 transform: scale(1, 1);
	 transform-origin: bottom left;
     font-family: 'Titillium Web', sans-serif; 

}
 .tabs .tabsBody li .tabHeader.active ~ .tabContent > div .tab-text {
	 animation-name: comeUp;
	 animation-duration: 0.6s;
	 opacity: 1;
     font-family: 'Titillium Web', sans-serif; 

}
 .tabs .tabsBody li .tabContent {
	 display: none;
	 padding: 2rem;
	 background: #eaf4fe;
	 margin-top: 0.7rem;
	 float: left;
     font-family: 'Titillium Web', sans-serif; 

}
 @media screen and (max-width: 1000px) {
	 .tabs .tabsBody li .tabContent {
		 margin-top: 0;
		 padding: 0;
	}
	 .tabs .tabsBody li .tabContent .button {
		 display: flex;
	}
}
 .tabs .tabsBody li .tabContent > * {
	 display: flex;
}
 @media screen and (max-width: 1000px) {
	 .tabs .tabsBody li .tabContent > * {
		 flex-direction: column;
		 flex-flow: column-reverse;
	}
}
 .tabs .tabsBody li .tabContent > * .tab-text {
	 padding: 1rem;
	 width: 50%;
}
 .tabs .tabsBody li .tabContent > * .tab-text .menu-h4 {
	 font-family: "AvantGardeforMTBb", sans-serif;
}
 .tabs .tabsBody li .tabContent > * .tab-text p {
	 margin-bottom: 2rem;
     font-size: 18px;
}
 @media screen and (max-width: 1000px) {
	 .tabs .tabsBody li .tabContent > * .tab-text {
		 width: 100%;
		 padding: 1rem 1rem 2rem;
	}
}
 .tabs .tabsBody li .tabContent > * .img-wrap {
	 transform: translatex(7rem);
}
 @media screen and (max-width: 1000px) {
	 .tabs .tabsBody li .tabContent > * .img-wrap {
		 transform: translatex(0);
	}
}
 .tabs .tabsBody li .tabContent > * img {
	 width: 100%;
}
 @media screen and (max-width: 1000px) {
	 .tabs .tabHeader {
		 box-sizing: border-box;
	}
	 .tabs .tabHeader span {
		 display: block;
		 background: currentcolor;
		 height: 18px;
		 width: 3px;
		 position: relative;
		 right: 0.5rem;
		 transition: 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
	}
	 .tabs .tabHeader span:after {
		 content: "";
		 background: currentcolor;
		 height: 3px;
		 width: 18px;
		 top: 8px;
		 left: -8px;
		 position: absolute;
	}
	 .tabs .tabHeader.active span {
		 transform: rotate(225deg);
	}
	 .tabs .tabsBody li {
		 display: block;
		 margin: 0;
		 width: auto;
	}
	 .tabs .tabsBody li .tabContent {
		 float: none;
	}
	 .tabs .tabsBody li .tabHeader {
		 width: 100%;
	}
}
 .tabs .no-js .tabsBody li {
	 display: block;
}
 .tabs .no-js .tabsBody li .tabHeader {
	 display: block;
}
 .tabs .no-js .tabsBody li .tabContent {
	 display: block;
}
 @keyframes comeUp {
	 0% {
		 opacity: 0;
		 transform: scale(0.8) translatey(-30px);
	}
	 100% {
		 opacity: 1;
		 transform: none;
	}
}
 button {
	 font-family: "Poppins", sans-serif;
	 font-size: 1.17em;
}
 h4 {
	 /* font-size: 2rem;
	 color: #222;
	 margin: 1rem 0; */
}
 .divider {
	 display: block;
	 margin: 3rem 0;
	 height: 8rem;
	 background: #e1e1e1;
}
 .button {
	 position: relative;
	 color: #fff;
	 background: #72a32d;
	 padding: 0.8rem 2.4rem;
	 text-decoration: none;
	 font-family: "AvantGardeforMTBb", sans-serif;
	 white-space: nowrap;
	 transition: 0.3s;
	 display: inline-flex;
	 align-items: center;
	 justify-content: center;
	 border: 1px solid #72a32d;
	 font-size: 18px;
	 font-weight: 600;
}
 .button:hover {
	 background: #4e7616;
	 color: #fff;
	 text-decoration: none;
}
 .button::after {
	 position: absolute;
	 content: "";
	 opacity: 0;
	 width: 10px;
	 height: 10px;
	 border: solid white;
	 border-width: 0 2px 2px 0;
	 display: inline-block;
	 transform: rotate(-45deg);
	 transition: all 300ms ease 0ms;
	 right: 1.8rem;
}
 .button:hover::after {
	 opacity: 1;
	 right: 1.3rem;
}
.top-span{
    /* font-family: sans-serif; */
    
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;
    letter-spacing: 5px;
    background: linear-gradient(90deg, #6B06BA 0%, #062699 50%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
}
.section-title{
    padding-top: 80px;
}

.btn-about-2 {
        background: linear-gradient(90deg, #2C69D1 0%, #0ABCF9 100%);
        border-radius: 30px;
        color: white;
        padding: 15px 30px;
        transition: 0.5s ease;
        /* border: #000 1px solid; */
    }
    .btn-about-2:hover {
    border-color: #0587B6;
    box-shadow: 0 0 8px rgb(48, 137, 209);
    color: #fff;
    transform: scale(1.05);
}
.back{
    background: url("images/h7-bg-section2.webp") no-repeat;
    background-size: cover;
    background-position: center;

}
.mobile{
    background: url("images/h5-bg-section1.webp") no-repeat;
    background-size: cover;
    background-position: center;
    
}
   </style>

</head>

<body>
  <?php include ('header.php');?>

  <div class="container-fluid back mt-5 mb-5 pb-5 py-5" id="backend">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 700px;">
                <span class="top-span" data-aos="fade-down"
        data-aos-duration="1000">BACKEND</span>
                <h1 class="mb-0 con-head">Backend Technologies Empowering<br> Scalable, and Efficient Web Applications</h1>
            </div>
    <div class="tabs">
        <ul class="tabsBody" role="tablist">
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-1" role="tab" aria-selected="false" aria-controls="tab-panel-1">PHP<span></span></button>
                <div class="tabContent" id="tab=panel-1" role="tabpanel" aria-labelledby="tab-button-1">
                    <div>
                        <div class="tab-text">
                            <h4 class="menu-h4">PHP</h4>
                            <p>PHP is an open-source server-side scripting language used for web development, providing a versatile platform to create dynamic and interactive web applications. It offers simplicity, flexibility, and extensive community support, making it a popular choice among developers. </p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-php.png" alt="2 men discussion work">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-2" role="tab" aria-selected="false" aria-controls="tab-panel-2">.Net<span></span></button>
                <div class="tabContent" id="tab=panel-2" role="tabpanel" aria-labelledby="tab-button-2">
                    <div>
                        <div class="tab-text">
                            <h4>.Net</h4>
                            <p>.NET is a versatile and powerful framework developed by Microsoft for building a wide range of applications. It supports multiple programming languages and offers a rich set of libraries and tools for web, desktop, mobile, and IoT development.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-dotnet.png" alt="Man doing science">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-3" role="tab" aria-selected="false" aria-controls="tab-panel-3">Laravel<span></span></button>
                <div class="tabContent" id="tab-panel-3" role="tabpanel" aria-labelledby="tab-button-3">
                    <div>
                        <div class=" tab-text">
                            <h4>Laravel</h4>
                            <p>Laravel is an elegant and efficient PHP framework for building web applications. It follows the MVC pattern and offers a wide range of features, making it a popular choice for developers. Laravel's robust ecosystem and expressive syntax make it a go-to choice for developers seeking productivity and scalability in web development.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-laravel.png" alt="Machines">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Node.js<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Node.js</h4>
                            <p>Node.js is a runtime environment that allows server-side execution of JavaScript code. It utilizes an event-driven, non-blocking I/O model for high efficiency. With its vast ecosystem and scalability, Node.js is ideal for building server-side applications, APIs, and real-time chat applications.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech.node.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Python<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Python</h4>
                            <p>Python is a versatile and readable programming language with a clean syntax. It offers a comprehensive standard library and a vast ecosystem of third-party packages. Python is widely used in web development, data analysis, machine learning, and automation due to its simplicity and strong community support.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-python.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <div class="container-fluid" id= "frontend">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 770px;">
                <span class="top-span" data-aos="fade-down"
        data-aos-duration="1000">FRONTEND</span>
                <h1 class="mb-0 con-head">Frontend Technologies Crafting<br> Engaging and User-Centric Web Experiences </h1>
            </div>
    <div class="tabs">
        <ul class="tabsBody" role="tablist">
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-1" role="tab" aria-selected="false" aria-controls="tab-panel-1">React js<span></span></button>
                <div class="tabContent" id="tab=panel-1" role="tabpanel" aria-labelledby="tab-button-1">
                    <div>
                        <div class="tab-text">
                            <h4>React js</h4>
                            <p>React.js is a popular JavaScript library for building user interfaces. It enables developers to create reusable UI components and efficiently update the interface in response to data changes. React.js follows a component-based architecture, making it highly modular and flexible for building interactive web applications. Its virtual DOM and efficient rendering engine contribute to fast and seamless user experiences. </p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-react.png" alt="2 men discussion work">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-2" role="tab" aria-selected="false" aria-controls="tab-panel-2">Angular js<span></span></button>
                <div class="tabContent" id="tab=panel-2" role="tabpanel" aria-labelledby="tab-button-2">
                    <div>
                        <div class="tab-text">
                            <h4>Angular js</h4>
                            <p>AngularJS is a robust JavaScript framework for building dynamic web applications. It follows the Model-View-Controller (MVC) architecture, providing a structured approach to development. AngularJS offers features like two-way data binding, dependency injection, and reusable components, enabling developers to create scalable and maintainable applications with ease.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-angular.png" alt="Man doing science">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-3" role="tab" aria-selected="false" aria-controls="tab-panel-3">Vue js<span></span></button>
                <div class="tabContent" id="tab-panel-3" role="tabpanel" aria-labelledby="tab-button-3">
                    <div>
                        <div class=" tab-text">
                            <h4>Vue js</h4>
                            <p>Vue.js is a progressive JavaScript framework for building user interfaces. It offers a gentle learning curve, allowing developers to easily integrate it into existing projects. Vue.js provides reactive data binding, component-based architecture, and a rich ecosystem, making it a versatile choice for creating interactive and scalable web applications.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-vue.png" alt="Machines">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">JavaSacript<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>JavaSacript</h4>
                            <p>JavaScript is a versatile programming language that adds interactivity and dynamic functionality to web pages. It is widely used for client-side scripting, enabling tasks such as form validation, DOM manipulation, and event handling. With its wide adoption, extensive libraries, and frameworks, JavaScript has become an essential tool for web development and creating engaging user experiences</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-js.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">HTML<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>HTML</h4>
                            <p>HTML (Hypertext Markup Language) is the standard markup language for creating web pages. It provides the structure and content of a webpage, defining elements such as headings, paragraphs, images, and links. HTML uses tags to mark up the content and allows for easy integration of other web technologies like CSS and JavaScript for enhanced styling and interactivity.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-html.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <div class="container-fluid mobile mt-5 mb-5 pb-5 py-5" id="mobile-app">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 750px;">
                <span class="top-span" data-aos="fade-down"
        data-aos-duration="1000">MOBILE APP</span>
                <h1 class="mb-0 con-head">Mobile App Technologies Driving<br> Innovation and Seamless Experiences</h1>
            </div>
    <div class="tabs">
        <ul class="tabsBody" role="tablist">
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-1" role="tab" aria-selected="false" aria-controls="tab-panel-1">React Native<span></span></button>
                <div class="tabContent" id="tab=panel-1" role="tabpanel" aria-labelledby="tab-button-1">
                    <div>
                        <div class="tab-text">
                            <h4>React Native</h4>
                            <p>React Native is a framework for building cross-platform mobile applications using JavaScript and React.js. It allows developers to write code once and deploy it on both iOS and Android platforms. With React Native, developers can create native-like mobile apps using a single codebase, saving time and effort in development while providing a high-quality user experience. </p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-rn.png" alt="2 men discussion work">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-2" role="tab" aria-selected="false" aria-controls="tab-panel-2">Flutter<span></span></button>
                <div class="tabContent" id="tab=panel-2" role="tabpanel" aria-labelledby="tab-button-2">
                    <div>
                        <div class="tab-text">
                            <h4>Flutter</h4>
                            <p>Flutter is a powerful open-source framework for building cross-platform mobile applications. Developed by Google, it enables developers to create high-performance apps using a single codebase. With its rich set of customizable widgets, Flutter allows for fast and visually appealing UI development, making it a popular choice for building native-like apps for iOS and Android platforms.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-flutter.png" alt="Man doing science">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-3" role="tab" aria-selected="false" aria-controls="tab-panel-3">iOS<span></span></button>
                <div class="tabContent" id="tab-panel-3" role="tabpanel" aria-labelledby="tab-button-3">
                    <div>
                        <div class=" tab-text">
                            <h4>iOS</h4>
                        <p>iOS is Apple's mobile operating system used in devices such as iPhones and iPads. It provides a seamless and secure user experience with a sleek interface. iOS offers a wide range of features, including a vast app ecosystem, advanced privacy settings, and integration with Apple's ecosystem, making it a preferred choice for mobile users.</p>                        
                        <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                    </div>
                        <div class="img-wrap">
                            <img src="images/tech-ios.png" alt="Machines">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Andriod<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Andriod</h4>
                            <p>Android is an open-source mobile operating system developed by Google. It powers millions of devices worldwide and provides a platform for building diverse and innovative mobile applications. With its robust ecosystem, extensive developer tools, and broad user base, Android offers opportunities for creating rich, interactive, and scalable mobile experiences.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-android.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Swift<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Swift</h4>
                        <p>Swift is a powerful and intuitive programming language developed by Apple for iOS, macOS, watchOS, and tvOS applications. It combines the best features of C and Objective-C while introducing modern syntax and safety features. Swift enables developers to write clean and efficient code, enhancing productivity and app performance on Apple platforms.</p>
                        <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-swift.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <div class="container-fluid" id="digital-marketing">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 700px;">
                <span class="top-span" data-aos="fade-down"
        data-aos-duration="1000">DIGITAL MARKETING</span>
                <h1 class="mb-0 con-head">Digital Marketing Empowering<br> Strategies and Targeted Campaigns </h1>
            </div>
    <div class="tabs">
        <ul class="tabsBody" role="tablist">
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-1" role="tab" aria-selected="false" aria-controls="tab-panel-1">SE Marketing<span></span></button>
                <div class="tabContent" id="tab=panel-1" role="tabpanel" aria-labelledby="tab-button-1">
                    <div>
                        <div class="tab-text">
                            <h4>Search Engine Marketing</h4>
                            <p>Search Engine Marketing (SEM) is a digital marketing strategy that focuses on improving a website's visibility in search engine results pages (SERPs). It involves paid advertising campaigns, such as Google Ads, to target specific keywords and attract relevant traffic. SEM helps businesses increase their online visibility, drive targeted traffic to their websites, and achieve their marketing goals efficiently. </p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-sem.png" alt="2 men discussion work">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-2" role="tab" aria-selected="false" aria-controls="tab-panel-2">SM Marketing<span></span></button>
                <div class="tabContent" id="tab=panel-2" role="tabpanel" aria-labelledby="tab-button-2">
                    <div>
                        <div class="tab-text">
                            <h4>Social Media Marketing</h4>
                            <p>Social media marketing is a digital marketing strategy that utilizes social media platforms to promote products or services. It involves creating engaging content, building an online presence, and interacting with the target audience to increase brand visibility and reach. Through targeted advertising and strategic campaigns, social media marketing helps businesses connect with their customers and drive conversions.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-sm.png" alt="Man doing science">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-3" role="tab" aria-selected="false" aria-controls="tab-panel-3">Contant Marketing<span></span></button>
                <div class="tabContent" id="tab-panel-3" role="tabpanel" aria-labelledby="tab-button-3">
                    <div>
                        <div class=" tab-text">
                            <h4>Contant Marketing</h4>
                            <p>Content marketing is a strategic approach that involves creating and distributing valuable, relevant, and consistent content to attract and engage a targeted audience. It aims to build brand awareness, establish credibility, and drive profitable customer action. By providing valuable information and addressing the needs of the audience, content marketing helps businesses build strong relationships and drive long-term customer loyalty.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-cm.png" alt="Machines">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">PPC Marketing<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>PPC Marketing</h4>
                            <p>PPC (Pay-Per-Click) marketing is a digital advertising model where advertisers pay a fee each time their ad is clicked. It allows businesses to drive targeted traffic to their websites and reach potential customers. With PPC, advertisers can set budgets, target specific demographics, and track the effectiveness of their campaigns, making it a cost-effective and measurable marketing strategy.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-ppc.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Email Marketing<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Email Marketing</h4>
                            <p>Email marketing is a digital marketing strategy that involves sending targeted messages to a group of individuals via email. It is an effective way to engage and nurture leads, promote products or services, and build customer relationships. Email marketing allows businesses to reach a wide audience, track performance metrics, and personalize content for better engagement and conversion rates.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-mm.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <div class="container-fluid back mt-5 mb-5 pb-5 py-5" id="cms">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 700px;">
                <span class="top-span" data-aos="fade-down"
        data-aos-duration="1000">CMS</span>
                <h1 class="mb-0 con-head">CMS Streamlining Content<br> Management & Empowering Websites  </h1>
            </div>
    <div class="tabs">
        <ul class="tabsBody" role="tablist">
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-1" role="tab" aria-selected="false" aria-controls="tab-panel-1">Wordpress<span></span></button>
                <div class="tabContent" id="tab=panel-1" role="tabpanel" aria-labelledby="tab-button-1">
                    <div>
                        <div class="tab-text">
                            <h4>Wordpress</h4>
                            <p>WordPress is a widely-used content management system (CMS) that simplifies website creation and management. With its user-friendly interface and extensive theme and plugin options, it offers customization without extensive coding knowledge. WordPress is versatile, scalable, and continuously updated, making it ideal for various types of websites.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-wordpress.png" alt="2 men discussion work">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-2" role="tab" aria-selected="false" aria-controls="tab-panel-2">CMS Drupal<span></span></button>
                <div class="tabContent" id="tab=panel-2" role="tabpanel" aria-labelledby="tab-button-2">
                    <div>
                        <div class="tab-text">
                            <h4>CMS Drupal</h4>
                            <p>Drupal is a powerful open-source content management system (CMS) that allows users to build and manage websites with ease. It offers a robust and flexible platform for creating dynamic and scalable websites, ranging from personal blogs to enterprise-level applications. With a vast collection of modules and themes, Drupal provides extensive customization options and supports various functionalities like content management, user authentication, and e-commerce integration.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-drupal.png" alt="Man doing science">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-3" role="tab" aria-selected="false" aria-controls="tab-panel-3">Magento<span></span></button>
                <div class="tabContent" id="tab-panel-3" role="tabpanel" aria-labelledby="tab-button-3">
                    <div>
                        <div class=" tab-text">
                            <h4>Magento</h4>
                            <p>Magento is a powerful open-source e-commerce platform designed for building online stores. It offers a wide range of features and flexibility to create personalized shopping experiences. With its robust architecture, scalability, and extensive customization options, Magento is a preferred choice for businesses of all sizes looking to establish a strong online presence.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-mgento.png" alt="Machines">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Shopify<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Shopify</h4>
                            <p>Shopify is a leading e-commerce platform that allows businesses to create and manage online stores. It provides a user-friendly interface and a wide range of customizable themes and templates. With built-in features for inventory management, payment processing, and marketing, Shopify simplifies the process of setting up and running an online store.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-shopify.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">WOO Commerce<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>WOO Commerce</h4>
                            <p>WooCommerce is a powerful e-commerce plugin for WordPress websites. It enables users to easily set up and manage online stores with features like product listings, shopping cart functionality, secure payments, and order management. With a range of extensions available, WooCommerce offers flexibility and scalability to meet various business needs.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-woo.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <div class="container-fluid" id="trend">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <span class="top-span" data-aos="fade-down"
        data-aos-duration="1000">TRENDING TECH R&D</span>
                <h1 class="mb-0 con-head">Trending Technologies Igniting<br> Innovation and Shaping the Future </h1>
            </div>
    <div class="tabs">
        <ul class="tabsBody" role="tablist">
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-1" role="tab" aria-selected="false" aria-controls="tab-panel-1">Machine learning<span></span></button>
                <div class="tabContent" id="tab=panel-1" role="tabpanel" aria-labelledby="tab-button-1">
                    <div>
                        <div class="tab-text">
                            <h4>Machine learning</h4>
                            <p>Machine Learning is a subset of artificial intelligence that focuses on developing algorithms and models that enable computers to learn and make predictions or decisions without explicit programming. It involves training and fine-tuning models using data, allowing them to recognize patterns and make accurate predictions or classifications. Machine Learning has a wide range of applications, including image and speech recognition, recommendation systems, and predictive analytics.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-ml.png" alt="2 men discussion work">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-2" role="tab" aria-selected="false" aria-controls="tab-panel-2">AI<span></span></button>
                <div class="tabContent" id="tab=panel-2" role="tabpanel" aria-labelledby="tab-button-2">
                    <div>
                        <div class="tab-text">
                            <h4>Artificial intelligence</h4>
                            <p>Artificial Intelligence (AI) is a branch of computer science focused on creating intelligent machines capable of mimicking human behavior. It involves the development of algorithms and models that enable computers to learn from data, recognize patterns, make decisions, and solve complex problems. AI has applications in various fields, including natural language processing, computer vision, robotics, and data analysis, revolutionizing industries and shaping the future of technology.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-ai.png" alt="Man doing science">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-3" role="tab" aria-selected="false" aria-controls="tab-panel-3">Block Chain<span></span></button>
                <div class="tabContent" id="tab-panel-3" role="tabpanel" aria-labelledby="tab-button-3">
                    <div>
                        <div class=" tab-text">
                            <h4>Block Chain</h4>
                            <p>Blockchain is a decentralized and immutable ledger technology that securely records and verifies transactions across a network of computers. It ensures transparency, traceability, and tamper resistance by utilizing cryptographic algorithms. Blockchain is widely used in various industries, including finance, supply chain, healthcare, and more, for secure and trusted digital transactions and data management.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-bc.png" alt="Machines">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Virtual Reality<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Virtual Reality</h4>
                            <p>Virtual Reality (VR) is an immersive technology that creates a simulated environment, replicating real or imagined experiences. It typically involves the use of headsets or goggles to provide users with a 3D visual and audio experience. VR is widely used in gaming, training simulations, entertainment, and various industries to enhance engagement and create immersive experiences for users.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-vr.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
            <li class="tabLi" role="presentation">
                <button class="tabHeader" id="tab-button-4" role="tab" aria-selected="false" aria-controls="tab-panel-4">Data Science<span></span></button>
                <div class="tabContent" id="tab-panel-4" role="tabpanel" aria-labelledby="tab-button-4">
                    <div>
                        <div class="tab-text">
                            <h4>Data Science</h4>
                            <p>Data Science is an interdisciplinary field that combines statistical analysis, machine learning, and domain expertise to extract insights and knowledge from data. It involves collecting, cleaning, and analyzing large datasets to uncover patterns, trends, and correlations. Data Science plays a crucial role in decision-making, predictive modeling, and solving complex problems across industries such as healthcare, finance, and marketing.</p>
                            <a href="https://api.whatsapp.com/send?phone=923149555914" target="_blank" class="btn btn-about-2">Let's get in touch</a>
                        </div>
                        <div class="img-wrap">
                            <img src="images/tech-ds.png" alt="2 Women examining laptop">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <?php include ('footer.php');?>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <script>
        // /* ========================================
// Tabs to Accordion - Accessible
// =========================================== */

$(".tabs .tabsBody > li:first-of-type button")
    .addClass("active")
    .next()
    .slideDown();
$(".tabs button").on("click", function (e) {
    if ($(this).hasClass("active")) {
        $(this).removeClass("active").attr("aria-selected", false);
    } else {
        $(this)
            .closest(".tabs")
            .find("button.active")
            .removeClass("active")
            .attr("aria-selected", false);
        $(this).addClass("active").attr("aria-selected", true);
    }
    var dropDown = $(this).closest("li").find(".tabContent");
    if ($(window).width() > 1000) {
        $(this).closest(".tabs").find(".tabContent").not(dropDown).hide();
        dropDown.fadeIn(600);
    }
    if ($(window).width() < 1000) {
        $(this).closest(".tabs").find(".tabContent").not(dropDown).slideUp();
        dropDown.slideToggle();
    }
});

    </script>

    
    <!-- Navbar Expand -->
    <script>
        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 90);
        });
    </script>
    <!-- Navbar Expand-->
</body>

</html>