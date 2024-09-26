<!DOCTYPE html>
<html>

<head>
    <title>Content Suggester</title>
    <!-- Include Bulma CSS and Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Center the form and adjust margins */
        .section {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        /* Loader styles */
        .loader {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-top: 4px solid #3273dc;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
            display: none;
            /* Hidden by default */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Adjust form fields */
        .field:not(:last-child) {
            margin-bottom: 0.75rem;
        }

        /* Container adjustments */
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Adjust accordion margin */
        #accordion-section {
            margin-top: 2rem;
        }

        /* Accordion content padding */
        .accordion-content .content {
            padding: 1rem;
        }

        /* Media object spacing */
        .media {
            margin-bottom: 1rem;
        }

        /* Media object last child */
        .media:last-child {
            margin-bottom: 0;
        }

        /* Ensure icons and text are vertically centered */
        .panel-block .level {
            width: 100%;
        }

        .panel-block .panel-icon,
        .panel-block .icon,
        .panel-block strong {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Form Section -->
        <section class="section">
            <div class="content">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h2 class="title is-3 has-text-centered">
                            Add your trend here
                        </h2>
                        <form id="keyword-form">
                            <div class="field has-addons">
                                <div class="control is-expanded">
                                    <input class="input" type="text" id="keyword-input" name="keyword" placeholder="Enter a keyword" required>
                                </div>
                                <div class="control">
                                    <button type="submit" class="button is-link">
                                        Get Insights
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="loader" id="loader"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Accordion Panel -->
        <section id="accordion-section">
            <div class="content">
                <div class="columns is-centered">
                    <div class="column is-10">

                        <!-- Accordion Panel Starts Here -->
                        <nav class="panel">
                            <!-- Question 1 -->
                            <div id="why">
                                <a class="panel-block is-block accordion-toggle">
                                    <div class="level is-mobile is-align-items-center">
                                        <!-- Left Side -->
                                        <div class="level-left">
                                            <span class="panel-icon">
                                                <i class="fas fa-question-circle"></i>
                                            </span>
                                            <strong class="ml-2">Top reasons why this topic is getting popular</strong>
                                        </div>
                                        <!-- Right Side -->
                                        <div class="level-right">
                                            <span class="icon">
                                                <i class="fas fa-angle-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="accordion-content is-hidden">
                                    <!-- Content for Question 1 -->
                                    <div class="content" id="why-content">
                                        <!-- Reason List -->
                                        <div class="box">
                                            <!-- Reason 1 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>1. Lorem Ipsum Dolor</strong></p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.</p>
                                                </div>
                                            </article>
                                            <!-- Reason 2 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>2. Sed Do Eiusmod</strong></p>
                                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                </div>
                                            </article>
                                            <!-- Reason 3 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>3. Ut Enim Ad Minim</strong></p>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </article>
                                            <!-- Reason 4 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>4. Duis Aute Irure</strong></p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div>
                                            </article>
                                            <!-- Reason 5 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>5. Excepteur Sint Occaecat</strong></p>
                                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div id="who">
                                <a class="panel-block is-block accordion-toggle">
                                    <div class="level is-mobile is-align-items-center">
                                        <!-- Left Side -->
                                        <div class="level-left">
                                            <span class="panel-icon">
                                                <i class="fas fa-users"></i>
                                            </span>
                                            <strong class="ml-2">Who's talking about this trend?</strong>
                                        </div>
                                        <!-- Right Side -->
                                        <div class="level-right">
                                            <span class="icon">
                                                <i class="fas fa-angle-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="accordion-content is-hidden">
                                    <!-- Content for Question 2 -->
                                    <div class="content" id="who-content">
                                        <!-- Influencer List -->
                                        <div class="box">
                                            <!-- Influencer 1 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>1. John Doe</strong> (<a href="#" target="_blank">@johndoe</a>)</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </article>
                                            <!-- Influencer 2 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>2. Jane Smith</strong> (<a href="#" target="_blank">@janesmith</a>)</p>
                                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </article>
                                            <!-- Influencer 3 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>3. Bob Johnson</strong> (<a href="#" target="_blank">@bobjohnson</a>)</p>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                                </div>
                                            </article>
                                            <!-- Influencer 4 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>4. Alice Williams</strong> (<a href="#" target="_blank">@alicewilliams</a>)</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                                </div>
                                            </article>
                                            <!-- Influencer 5 -->
                                            <article class="media">
                                                <div class="media-left">
                                                    <span class="icon has-text-info">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <div class="media-content">
                                                    <p><strong>5. Michael Brown</strong> (<a href="#" target="_blank">@michaelbrown</a>)</p>
                                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div id="what">
                                <a class="panel-block is-block accordion-toggle" id="what-accordion-toggle">
                                    <div class="level is-mobile is-align-items-center">
                                        <!-- Left Side -->
                                        <div class="level-left">
                                            <span class="panel-icon">
                                                <i class="fas fa-comments"></i>
                                            </span>
                                            <strong class="ml-2">What are people saying?</strong>
                                        </div>
                                        <!-- Right Side -->
                                        <div class="level-right">
                                            <span class="icon">
                                                <i class="fas fa-angle-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="accordion-content is-hidden" id="what-accordion-content">
                                    <!-- Content for Question 3 -->
                                    <div class="content" id="what-content">
                                        <!-- Dynamic content will be inserted here -->
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- Accordion Panel Ends Here -->

                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Accordion functionality
        const accordions = document.querySelectorAll('.accordion-toggle');

        accordions.forEach((accordion) => {
            accordion.addEventListener('click', () => {
                // Toggle the 'is-hidden' class on the next sibling element (the content)
                const content = accordion.nextElementSibling;
                content.classList.toggle('is-hidden');

                // Change the icon direction
                const icon = accordion.querySelector('.icon i');
                icon.classList.toggle('fa-angle-down');
                icon.classList.toggle('fa-angle-up');
            });
        });

        document.getElementById('keyword-form').addEventListener('submit', function(e) {
            e.preventDefault();
            var keyword = document.getElementById('keyword-input').value;
            var loader = document.getElementById('loader');

            // Get references to the content divs
            var whatContentDiv = document.getElementById('what-content');

            // Show the loader
            loader.style.display = 'block';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'get_suggestions.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                loader.style.display = 'none';
                if (this.status == 200) {
                    var response = JSON.parse(this.responseText);
                    if (response) {
                        var suggestions = response['suggestions'];

                        // Clear existing content
                        whatContentDiv.innerHTML = '';

                        // Create a box for comments
                        var box = document.createElement('div');
                        box.className = 'box';

                        // Loop through suggestions and create media objects
                        suggestions.forEach(function(suggestion, index) {
                            var article = document.createElement('article');
                            article.className = 'media';

                            var mediaLeft = document.createElement('div');
                            mediaLeft.className = 'media-left';
                            mediaLeft.innerHTML = `
                                <span class="icon has-text-info">
                                    <i class="fas fa-user"></i>
                                </span>
                            `;

                            var mediaContent = document.createElement('div');
                            mediaContent.className = 'media-content';
                            mediaContent.innerHTML = `
                                <p><strong>"${suggestion.comment}"</strong></p>
                                <p class="is-size-7">${suggestion.username} - (<a href="${suggestion.url}" target="_blank">Original Post</a>)</p>

                            `;

                            article.appendChild(mediaLeft);
                            article.appendChild(mediaContent);

                            box.appendChild(article);
                        });

                        whatContentDiv.appendChild(box);

                        // Open the "What are people saying?" accordion section
                        var whatAccordionContent = document.getElementById('what-accordion-content');
                        whatAccordionContent.classList.remove('is-hidden');

                        // Change the icon to 'up' in the accordion header
                        var whatAccordionToggle = document.getElementById('what-accordion-toggle');
                        var icon = whatAccordionToggle.querySelector('.icon i');
                        icon.classList.remove('fa-angle-down');
                        icon.classList.add('fa-angle-up');
                    } else if (response.error) {
                        whatContentDiv.innerHTML = '<p class="has-text-danger">Error: ' + response.error + '</p>';
                    }
                } else {
                    whatContentDiv.innerHTML = '<p class="has-text-danger">An error occurred while fetching data.</p>';
                }
            };

            xhr.onerror = function() {
                loader.style.display = 'none';
                whatContentDiv.innerHTML = '<p class="has-text-danger">Request failed.</p>';
            };

            xhr.send('keyword=' + encodeURIComponent(keyword));
        });
    </script>

</body>

</html>