<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="Logo/simbol.png" sizes="16x16 32x32" rel="shortcut icon">
    <title>Medium</title>
</head>
<body>

<?php
        include 'tata_letak/navbar.php';
?>
        <h1 class="title">SYNTAX PHP BERISI JUDUL</h1>
        <header>
            <div class="profile-1">
                <img height="48px" width='48px' src="https://miro.medium.com/fit/c/96/96/1*U6C7jnR_52gRkl6OTsGOrw.png" alt="Profile image">
            </div>
            <div class="info">
                <span>SYNTAX PHP NAMA PENULIS</span>
                <div>Follow</div>
                <span>Aug 27, 2015 <span>.</span> 13 min read</span>
            </div>
        </header>
        <span class='header-sap'>.  .  .</span>

        <!--<span class='top-highlight'>Top highlight</span>-->

        <article>
            <p class='para-1-1'>
            In this article we'll take a look at the wonderful world of the CSS Grid Layout, 
            a relatively new W3C specification that has partially started to see the light in 
            some browsers. But before we dive into what this new CSS technique is all about 
            and how to use it, let's quickly review grid theory.
            </p>

            <h5 class="subheading">
                My really short introduction to grid theory
            </h5>
            <p class="para-2-1">
                I am not a designer nor did I know much about grid theory before stumbling upon the 
                CSS Grid Layout specification, so don't take my word for it and go look it up yourself, 
                but if you don't care to, here's my pitch about it
            </p>
            <p class='para-2-2'>
                In essence, a grid is a set of invisible vertical and horizontal lines that the various 
                design and content pieces of a web page, magazine or newspaper are positioned on.
                The goal of a grid is to serve as a base for placing the various pieces of content and 
                to make sure these pieces are aligned and spaced out evenly. A grid, even if not visible, 
                provides the viewer with a way to navigate content visually.
            </p>

            <h5 class="subheading">
                So what has CSS got to do with it?
            </h5>
            <p class="para-3-1">
                CSS is getting a set of entirely new properties that, when used together, allow you to 
                define grids for your web content to go onto. These properties are defined in the CSS 
                Grid Layout specification.
            </p>
            <p class='para-3-2'>
                CSS hasn’t particularly been known for its ability to handle complex layouts. Although 
                this may not have been a problem when CSS first came out, it has evolved to be a pretty 
                common one over the years as all sorts of complex layouts couldn’t be easily implemented. 
                People have been very creative at getting around the lack of support by using floats or 
                absolute positioning and a variety of CSS layout frameworks emerged.
            </p>
            <p class="para-3-3">
                So it’s about time CSS got some proper layout solutions to support today's use cases.
            </p>

            <h5 class="subheading">Can I use it?</h5>
            <p class="para-4-1">
                Yes you can start using it today, but only Chrome has implemented the specification far 
                enough to play with grids, and you need to turn the experimental Web Platform features flag on.
            </p>
            <p class="para-4-2">
                IE has an early implementation (dating back to IE10) too but the spec has evolved since it was 
                added and so it’s not entirely compatible with it anymore.
            </p>
            <p class="para-4-3">
                Firefox has started implementing it too so it shouldn’t be too long before you can use it in this browser.
            </p>
            <p class='para-4-4'>
                Finally, a polyfill exists, so you have no excuses not to start experimenting (and I strongly encourage you do)!
            </p>

            <h5 class="subheading">So what's a CSS Grid Layout?</h5>
            <p class="para-5-1">
                To its core, a grid layout in CSS is a set of vertical and horizontal lines that define cells that 
                content can be arbitrarily positioned on. So it looks like a table in a way, except for a few key 
                differences we’ll see later.
            </p>
            <div class='figure figure-1'>
                <img src="https://miro.medium.com/max/376/1*zcOcwuBtMoBaUfHHAJPNyg.png" alt="figure-1">
            </div>
            <p class='para-5-2'>The previous figure shows the building blocks of a grid:</p>
            <ul class="list-1">
                <li>
                    <p>
                        <strong>Lines:</strong>
                        in this case there are 4 vertical lines and 3 horizontal lines. Lines are given numbers starting 
                        from 1. Vertical lines are shown from left to right, but this depends on the writing direction.
                        Lines can optionally be given names, which helps with referencing them in CSS as we’ll see later.
                    </p>
                </li>
                <li>
                    <p>
                        <strong>Tracks:</strong>
                        a track is simply the space between 2 parallel lines. So in the above example, there are 3 vertical 
                        tracks and 2 horizontal tracks. Lines are useful to say where content starts and stops, but tracks 
                        are ultimately where content goes.
                    </p>
                </li>
                <li>
                    <p>
                        <strong>Cell:</strong>
                        a cell is where a horizontal and a vertical track meet. In the figure above, only one cell has been 
                        highlighted, but there are 6 cells in the grid.
                    </p>
                </li>
                <li>
                    <p>
                        <strong>Areas:</strong>
                        an area is a rectangular shape that can span an arbitrary number of cells. Areas, like lines, 
                        can be named. In the above grid, we could for example define areas A, B and C as shown below:
                    </p>
                </li>
            </ul>
            <div class="figure figure-2">
                <img src='https://miro.medium.com/max/366/1*LyY-gAwN4xdr8FmReEdMMw.png' alt='figure 2'></img>
            </div>
            <p class='para-5-3'>Now that we know these simple definitions, let’s take a look at what makes grids so powerful.</p>

            <h5 class="subheading">One key advantage of CSS grids is that they enforce real separation of layout and markup.</h5>
            <p class='para-6-1'>
            Indeed, the grid itself is completely defined purely in CSS. This means that apart from the parent HTML element the 
            grid is applied to, there's no need for defining any extra elements for the columns, rows, cells or areas.
            </p>
            <p class="para-6-2">
                When you think of it, that’s a really interesting property. One aspect of it is that the visual order of elements 
                on the page is decoupled from the order of elements in the markup. That’s important because on a page the source 
                order is used for things like speech and tab navigation, so CSS Grids allow you to optimize the markup for accessibility 
                without compromising your ability to manipulate the visual result. One other point is that the markup will be somewhat 
                lighter and easier to understand, and therefore easier to maintain.
            </p>
            <p class="para-6-3">
                But more importantly, this gives a very powerful tool for separating the content from the layout, effectively decoupling 
                them in a way that making a change to any of them doesn’t impact and otherwise break the other. As a designer, you could 
                easily experiment with new layouts without having to change anything else than CSS, as long as your new layouts provide 
                the expected lines and areas the content uses. And as a developer, you would simply need to use the numbered or named 
                lines and areas to position your content on the grid.
            </p>
            <p class="para-6-4">
                Imagine the simple following grid layout:
            </p>
            <div class="figure figure-3">
                <img src="https://miro.medium.com/max/474/1*oB_sweiQByIMdVPXGZrw4Q.png" alt="Figure 3">
            </div>
            <p class="para-6-4">
                In this layout, named areas have been defined, allowing content to be positioned in them simply by referencing these names. 
                This means that not only can we change this layout relatively easily in the future, as long as we maintain the named regions 
                (here the named regions act as the layout’s public API in a way), but media-queries can also be used to change this layout 
                dynamically too. Remember, the whole layout is defined in CSS, so media-queries play with grid layouts very well.
            </p>

            <h5 class="subheading">Creating grids with CSS</h5>
            <pre class="code">.container {display: grid }</pre>
            <p class='para-6-5'>
                Just doing this though isn’t nearly enough, we also need to define what this grid looks like, how many columns and rows it 
                has, and how big they are. This can be done by using grid templates as shown in the following example:
            </p>
<pre class="code">
.container {
    display: grid;
    grid-template-rows: 200px 100px;
    grid-template-columns: repeat(4, 100px);
    }</pre>

            <p class='para-7'>Here are some interesting references if you wish to know more:</p>
            <ul>
                <li><p>The spec:
                        <a href='http://dev.w3.org/csswg/css-grid-1/'>http://dev.w3.org/csswg/css-grid-1/</a>
                    </p>
                </li>
                <li><p>Some grid examples by Rachel Andrew:
                        <a href="http://gridbyexample.com/">http://gridbyexample.com/</a>
                    </p>
                </li>
                <li><p>Bug to follow for the implementation in Firefox: 
                        <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=616605">https://bugzilla.mozilla.org/show_bug.cgi?id=616605</a>
                    </p>
                </li>
                <li>
                    <p>If there’s one talk you need to watch, it should be this one by Rachel Andrew:</p>
                    <div class="embed-container embed-container-1">
                        <div class="embed">
                            <p>This embedded content is from a site that does not comply with the Do Not Track (DNT) setting now enabled 
                            on your browser.</p>
                            <h6>Learn more about Medium's DNT policy</h6>
                            <div class="show-embed-btn">SHOW EMBED</div>
                        </div>
                    </div>
                </li>
                <li><p>And Manuel Rego’s talk is also very useful:</p>
                   <div class="embed-container embed-container-2">
                        <div class="embed">
                            <p>This embedded content is from a site that does not comply with the Do Not Track (DNT) setting now enabled 
                            on your browser.</p>    
                            <h6>Learn more about Medium's DNT policy</h6>
                            <div class="show-embed-btn">SHOW EMBED</div>
                        </div>
                    </div> 
                </li>
            </ul>

            <div class="article-bottom">
                <div class="tags">CSS</div>
                <div class="tags">Grid</div>
                <div class="tags">Layout</div>
                <div class="bottom-row-1">
                    <div class='clap-icon-1'>
                        <svg height='33' width='33'>
                            <path d='M28.86 17.34l-3.64-6.4c-.3-.43-.71-.73-1.16-.8a1.12 1.12 0 0 0-.9.21c-.62.5-.73 1.18-.32 2.06l1.22 
                            2.6 1.4 2.45c2.23 4.09 1.51 8-2.15 11.66a9.6 9.6 0 0 1-.8.71 6.53 6.53 0 0 0 4.3-2.1c3.82-3.82 3.57-7.87 
                            2.05-10.39zm-6.25 11.08c3.35-3.35 4-6.78 1.98-10.47L21.2 12c-.3-.43-.71-.72-1.16-.8a1.12 1.12 0 0 0-.9.22c-.62.49-.74 
                            1.18-.32 2.06l1.72 3.63a.5.5 0 0 1-.81.57l-8.91-8.9a1.33 1.33 0 0 0-1.89 1.88l5.3 5.3a.5.5 0 0 
                            1-.71.7l-5.3-5.3-1.49-1.49c-.5-.5-1.38-.5-1.88 0a1.34 1.34 0 0 0 0 1.89l1.49 1.5 5.3 5.28a.5.5 0 0 1-.36.86.5.5 0 0 
                            1-.36-.15l-5.29-5.29a1.34 1.34 0 0 0-1.88 0 1.34 1.34 0 0 0 0 1.89l2.23 2.23L9.3 21.4a.5.5 0 0 1-.36.85.5.5 0 0 
                            1-.35-.14l-3.32-3.33a1.33 1.33 0 0 0-1.89 0 1.32 1.32 0 0 0-.39.95c0 .35.14.69.4.94l6.39 6.4c3.53 3.53 8.86 5.3 12.82 
                            1.35zM12.73 9.26l5.68 5.68-.49-1.04c-.52-1.1-.43-2.13.22-2.89l-3.3-3.3a1.34 1.34 0 0 0-1.88 0 1.33 1.33 0 0 0-.4.94c0 
                            .22.07.42.17.61zm14.79 19.18a7.46 7.46 0 0 1-6.41 2.31 7.92 7.92 0 0 1-3.67.9c-3.05 0-6.12-1.63-8.36-3.88l-6.4-6.4A2.31 
                            2.31 0 0 1 2 19.72a2.33 2.33 0 0 1 1.92-2.3l-.87-.87a2.34 2.34 0 0 1 0-3.3 2.33 2.33 0 0 1 1.24-.64l-.14-.14a2.34 2.34 0 
                            0 1 0-3.3 2.39 2.39 0 0 1 3.3 0l.14.14a2.33 2.33 0 0 1 3.95-1.24l.09.09c.09-.42.29-.83.62-1.16a2.34 2.34 0 0 1 3.3 0l3.38 
                            3.39a2.17 2.17 0 0 1 1.27-.17c.54.08 1.03.35 1.45.76.1-.55.41-1.03.9-1.42a2.12 2.12 0 0 1 1.67-.4 2.8 2.8 0 0 1 1.85 1.25l3.65 
                            6.43c1.7 2.83 2.03 7.37-2.2 11.6zM13.22.48l-1.92.89 2.37 2.83-.45-3.72zm8.48.88L19.78.5l-.44 3.7 2.36-2.84zM16.5 3.3L15.48 
                            0h2.04L16.5 3.3z'></path>
                        </svg>
                    </div>
                    <p class='clap-text'>635 claps</p>
                    <div class="social-icons-2">
                        <img src="src/twitter.png" alt="">
                        <img src="src/facebook.png" alt="">
                        <img src="src/bookmark.png" alt="">
                        <img src="src/menu.png" alt="">
                    </div>
                </div>
                <div class="saprator"></div>
                <div class="bottom-row-2">
                    <div class="profile-2">
                        <img src="https://miro.medium.com/fit/c/96/96/1*U6C7jnR_52gRkl6OTsGOrw.png" alt="Profile">
                    </div>
                    <div class="bottom-row-2-column">
                        <p>Written by</p>
                        <h5>Patrick Brosset</h5>
                        <p>Firefox DevTools</p>
                    </div>
                    <div class="follow-btn">Follow</div>
                </div>
                <div class="saprator"></div>
                <div class="responses-btn">
                    See responses (24)
                </div>
            </div>
        </article>

        <div class="bottom-section-container">
            <div class="bottom-section">
                <h5>More from Medium</h5>
                <div class="saprator"></div>
                <div class="articles-row">

                    <div class="article-card-1 card">
                        <p>Related reads</p>
                        <div class='card-header-1'></div>
                        <h3>
                            E-cigrattes: A win or loss for public ...
                        </h3>
                        <div class="card-1-btn-row card-row">
                            <div class="card-1-profile"></div>
                            <div class="card-1-btn-column card-column">
                                <p class='username'>Knowable...</p>
                                <p class="date">July 6, 2018 . 10min read</p>
                            </div> 
                            <div class="card-row-icons">
                                <svg class='clap-icon' width="25" height="25">
                                    <path d="M11.74 0l.76 2.97.76-2.97zM14.81 3.78l1.84-2.56-1.42-.47zM8.38 1.22l1.84 2.56L9.8.75zM20.38 
                                    21.62a5.11 5.11 0 0 1-3.16 1.61l.49-.45c2.88-2.89 3.45-5.98 1.69-9.21l-1.1-1.94-.96-2.02c-.31-.67-.23-1.18.25-1.55a.84.84 
                                    0 0 1 .66-.16c.34.05.66.28.88.6l2.85 5.02c1.18 1.97 1.38 5.12-1.6 8.1M7.1 21.1l-5.02-5.02a1 1 0 0 1 .7-1.7 
                                    1 1 0 0 1 .72.3l2.6 2.6a.44.44 0 0 0 .63-.62L4.1 14.04l-1.75-1.75a1 1 0 1 1 1.41-1.41l4.15 4.15a.44.44 0 0 
                                    0 .63 0 .44.44 0 0 0 0-.62L4.4 10.26 3.22 9.08a1 1 0 0 1 0-1.4 1.02 1.02 0 0 1 1.41 0l1.18 1.16L9.96 13a.44.44 
                                    0 0 0 .62 0 .44.44 0 0 0 0-.63L6.43 8.22a.99.99 0 0 1-.3-.7.99.99 0 0 1 .3-.7 1 1 0 0 1 1.41 0l7 6.98a.44.44 0 
                                    0 0 .7-.5l-1.35-2.85c-.31-.68-.23-1.19.25-1.56a.85.85 0 0 1 .66-.16c.34.06.66.28.88.6L18.63 14c1.57 2.88 1.07 
                                    5.54-1.55 8.16a5.62 5.62 0 0 1-5.06 1.65 9.35 9.35 0 0 1-4.93-2.72zM11 5.98l2.56 2.56c-.5.6-.56 1.41-.15 
                                    2.28l.26.56-4.25-4.25a.98.98 0 0 1-.12-.45 1 1 0 0 1 .29-.7 1.02 1.02 0 0 1 1.41 0zm8.89 2.06c-.38-.56-.9-.92-1.49-1.01a1.74 
                                    1.74 0 0 0-1.34.33c-.38.29-.61.65-.71 1.06a2.1 2.1 0 0 0-1.1-.56 1.78 1.78 0 0 0-.99.13l-2.64-2.64a1.88 1.88 0 0 
                                    0-2.65 0 1.86 1.86 0 0 0-.48.85 1.89 1.89 0 0 0-2.67-.01 1.87 1.87 0 0 0-.5.9c-.76-.75-2-.75-2.7-.04a1.88 1.88 0 0 0 
                                    0 2.66c-.3.12-.61.29-.87.55a1.88 1.88 0 0 0 0 2.66l.62.62a1.88 1.88 0 0 0-.9 3.16l5.01 5.02c1.6 1.6 3.52 2.64 5.4 
                                    2.96a7.16 7.16 0 0 0 1.18.1c1.03 0 2-.25 2.9-.7A5.9 5.9 0 0 0 21 22.24c3.34-3.34 3.08-6.93 1.74-9.17l-2.87-5.04z"></path>
                                </svg>
                                <span>1.3k</span>
                            <div class="vr-saprator"></div>
                            <div class="bookmark-icon"></div>
                            </div>
                        </div>
                    </div>

                    <div class="article-card-2 card">
                        <p>Related reads</p>
                        <div class='card-header-2'></div>
                        <h3>
                            Icea peak four more russsan artist.
                        </h3>
                        <div class="card-1-btn-row card-row">
                            <div class="card-2-profile"></div>
                            <div class="card-2-btn-column card-column">
                                <p class='username'>Anton Solovjov</p>
                                <p class="date">Feb 11, 2018 . 5min read</p>
                            </div> 
                            <div class="card-row-icons">
                                <svg class='clap-icon' width="25" height="25">
                                    <path d="M11.74 0l.76 2.97.76-2.97zM14.81 3.78l1.84-2.56-1.42-.47zM8.38 1.22l1.84 2.56L9.8.75zM20.38 
                                    21.62a5.11 5.11 0 0 1-3.16 1.61l.49-.45c2.88-2.89 3.45-5.98 1.69-9.21l-1.1-1.94-.96-2.02c-.31-.67-.23-1.18.25-1.55a.84.84 
                                    0 0 1 .66-.16c.34.05.66.28.88.6l2.85 5.02c1.18 1.97 1.38 5.12-1.6 8.1M7.1 21.1l-5.02-5.02a1 1 0 0 1 .7-1.7 
                                    1 1 0 0 1 .72.3l2.6 2.6a.44.44 0 0 0 .63-.62L4.1 14.04l-1.75-1.75a1 1 0 1 1 1.41-1.41l4.15 4.15a.44.44 0 0 
                                    0 .63 0 .44.44 0 0 0 0-.62L4.4 10.26 3.22 9.08a1 1 0 0 1 0-1.4 1.02 1.02 0 0 1 1.41 0l1.18 1.16L9.96 13a.44.44 
                                    0 0 0 .62 0 .44.44 0 0 0 0-.63L6.43 8.22a.99.99 0 0 1-.3-.7.99.99 0 0 1 .3-.7 1 1 0 0 1 1.41 0l7 6.98a.44.44 0 
                                    0 0 .7-.5l-1.35-2.85c-.31-.68-.23-1.19.25-1.56a.85.85 0 0 1 .66-.16c.34.06.66.28.88.6L18.63 14c1.57 2.88 1.07 
                                    5.54-1.55 8.16a5.62 5.62 0 0 1-5.06 1.65 9.35 9.35 0 0 1-4.93-2.72zM11 5.98l2.56 2.56c-.5.6-.56 1.41-.15 
                                    2.28l.26.56-4.25-4.25a.98.98 0 0 1-.12-.45 1 1 0 0 1 .29-.7 1.02 1.02 0 0 1 1.41 0zm8.89 2.06c-.38-.56-.9-.92-1.49-1.01a1.74 
                                    1.74 0 0 0-1.34.33c-.38.29-.61.65-.71 1.06a2.1 2.1 0 0 0-1.1-.56 1.78 1.78 0 0 0-.99.13l-2.64-2.64a1.88 1.88 0 0 
                                    0-2.65 0 1.86 1.86 0 0 0-.48.85 1.89 1.89 0 0 0-2.67-.01 1.87 1.87 0 0 0-.5.9c-.76-.75-2-.75-2.7-.04a1.88 1.88 0 0 0 
                                    0 2.66c-.3.12-.61.29-.87.55a1.88 1.88 0 0 0 0 2.66l.62.62a1.88 1.88 0 0 0-.9 3.16l5.01 5.02c1.6 1.6 3.52 2.64 5.4 
                                    2.96a7.16 7.16 0 0 0 1.18.1c1.03 0 2-.25 2.9-.7A5.9 5.9 0 0 0 21 22.24c3.34-3.34 3.08-6.93 1.74-9.17l-2.87-5.04z"></path>
                                </svg>
                                <span>1.1k</span>
                                <div class="vr-saprator"></div>
                                <div class="bookmark-icon"></div>
                            </div>
                        </div>
                    </div>

                    <div class="article-card-3 card">
                        <p>Related reads</p>
                        <div class='card-header-3'></div>
                        <h3>
                            create full screen website preloader ...
                        </h3>
                        <div class="card-3-btn-row card-row">
                            <div class="card-3-profile"></div>
                            <div class="card-3-btn-column card-column">
                                <p class='username'>Vaibhav Khuble</p>
                                <p class="date">Sep 23, 2018 . 4min read</p>
                            </div> 
                            <div class="card-row-icons">
                                <svg class='clap' width="25" height="25">
                                    <path d="M11.74 0l.76 2.97.76-2.97zM14.81 3.78l1.84-2.56-1.42-.47zM8.38 1.22l1.84 2.56L9.8.75zM20.38 
                                    21.62a5.11 5.11 0 0 1-3.16 1.61l.49-.45c2.88-2.89 3.45-5.98 1.69-9.21l-1.1-1.94-.96-2.02c-.31-.67-.23-1.18.25-1.55a.84.84 
                                    0 0 1 .66-.16c.34.05.66.28.88.6l2.85 5.02c1.18 1.97 1.38 5.12-1.6 8.1M7.1 21.1l-5.02-5.02a1 1 0 0 1 .7-1.7 
                                    1 1 0 0 1 .72.3l2.6 2.6a.44.44 0 0 0 .63-.62L4.1 14.04l-1.75-1.75a1 1 0 1 1 1.41-1.41l4.15 4.15a.44.44 0 0 
                                    0 .63 0 .44.44 0 0 0 0-.62L4.4 10.26 3.22 9.08a1 1 0 0 1 0-1.4 1.02 1.02 0 0 1 1.41 0l1.18 1.16L9.96 13a.44.44 
                                    0 0 0 .62 0 .44.44 0 0 0 0-.63L6.43 8.22a.99.99 0 0 1-.3-.7.99.99 0 0 1 .3-.7 1 1 0 0 1 1.41 0l7 6.98a.44.44 0 
                                    0 0 .7-.5l-1.35-2.85c-.31-.68-.23-1.19.25-1.56a.85.85 0 0 1 .66-.16c.34.06.66.28.88.6L18.63 14c1.57 2.88 1.07 
                                    5.54-1.55 8.16a5.62 5.62 0 0 1-5.06 1.65 9.35 9.35 0 0 1-4.93-2.72zM11 5.98l2.56 2.56c-.5.6-.56 1.41-.15 
                                    2.28l.26.56-4.25-4.25a.98.98 0 0 1-.12-.45 1 1 0 0 1 .29-.7 1.02 1.02 0 0 1 1.41 0zm8.89 2.06c-.38-.56-.9-.92-1.49-1.01a1.74 
                                    1.74 0 0 0-1.34.33c-.38.29-.61.65-.71 1.06a2.1 2.1 0 0 0-1.1-.56 1.78 1.78 0 0 0-.99.13l-2.64-2.64a1.88 1.88 0 0 
                                    0-2.65 0 1.86 1.86 0 0 0-.48.85 1.89 1.89 0 0 0-2.67-.01 1.87 1.87 0 0 0-.5.9c-.76-.75-2-.75-2.7-.04a1.88 1.88 0 0 0 
                                    0 2.66c-.3.12-.61.29-.87.55a1.88 1.88 0 0 0 0 2.66l.62.62a1.88 1.88 0 0 0-.9 3.16l5.01 5.02c1.6 1.6 3.52 2.64 5.4 
                                    2.96a7.16 7.16 0 0 0 1.18.1c1.03 0 2-.25 2.9-.7A5.9 5.9 0 0 0 21 22.24c3.34-3.34 3.08-6.93 1.74-9.17l-2.87-5.04z"></path>
                                </svg>
                                <span>1k</span>
                            <div class="vr-saprator"></div>
                            <div class="bookmark-icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class='footer-container'>
                <div class="footer-row-1">
                    <div class="footer-column">
                        <h5>Discover Medium</h5>
                        <p>
                            Welcome to a place where words matter. On Medium, smart voices and 
                            original ideas take center stage - with no ads in sight. Watch
                        </p>
                    </div>
                    <div class="footer-column">
                        <h5>Make Medium yours</h5>
                        <p>
                            Follow all the topics you care about, and we’ll deliver the best stories 
                            for you to your homepage and inbox. Explore
                        </p>
                    </div>
                    <div class="footer-column">
                        <h5>Become a member</h5>
                        <p>
                            Get unlimited access to the best stories on Medium — and support writers while 
                            you’re at it. Just $5/month. Upgrade
                        </p>
                    </div>

                </div>
                <div class="saprator"></div>
                <div class="bottom-nav">
                    <h1>Medium</h1>
                    <div class="bottom-nav-btn">
                        <div class="about">About</div>
                        <div class="help">help</div>
                        <div class="legal">legal</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>