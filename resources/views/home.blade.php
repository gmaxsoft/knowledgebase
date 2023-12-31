@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentation') }}
        </h2>
    </x-slot>

    <!-- Sidebar Navigation -->
    <div class="idocs-navigation bg-light">
        <ul class="nav flex-column ">
            <li class="nav-item"><a class="nav-link active" href="#idocs_start">Getting Started</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#idocs_installation">Installation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_html_structure">HTML Structure</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_sass">Sass</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_color_schemes">Color Schemes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_theme_customization">Customization</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_logo_settings">Logo Settings</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#idocs_layout">Layout</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#idocs_header">Header</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_navbar">Navbar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_sidebar">Sidebar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_footer">Footer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_box_layout">Box Layout</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#idocs_content">Content</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#idocs_typography">Typography</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_code">Code</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_table">Table</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_icons">Icons</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_image">Image</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_video">Video</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#idocs_components">Components</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#idocs_accordion">Accordion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_tabs">Tabs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_social_icon">Social Icon</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_helper_classes">Helper Classes</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#idocs_faq">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_source_credits">Source & Credits</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_support">Support</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_templates">More Templates</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_changelog">Changelog</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#v1-1">v1.1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#v1-0">v1.0</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="idocs-content-dash">
        <div class="container">

            <section id="idocs_start">
                <h1>Documentation</h1>
                <h2>Your data Item Name Here</h2>
                <p class="lead">Thank you so much for purchasing our item from maxsoft.</p>
                <hr>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <ul class="list-unstyled">
                            <li><strong>Version:</strong> 1.1</li>
                            <li><strong>Author:</strong> <a href="http://www.maxsoft.pl" target="_blank">Maxsoft Design</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <ul class="list-unstyled">
                            <li><strong class="font-weight-700">Created:</strong> 19 August, 2023</li>
                            <li><strong>Update:</strong> 12 December, 2023</li>
                        </ul>
                    </div>
                </div>
                <p class="alert alert-info">If you have any questions that are beyond the scope of this help file, Please feel free to email via <a target="_blank" href="http://www.maxsoft.pl">Item Support Page</a>.</p>
            </section>

            <hr class="divider">

            <section id="idocs_installation">
                <h2>Installation</h2>
                <p class="lead">Follow the steps below to setup your site template:</p>
                <ol>
                    <li>Unzip the downloaded package and open the <strong>/HTML</strong> folder to find all the template files. You will need to upload these files to your hosting web server using FTP or localhost in order to use it on your website.</li>
                    <li>Below is the folder structure and needs to be uploaded to your website or localhost root directory:
                        <ul>
                            <li><code>HTML/assets</code> - Contains all of the assets referenced
                                <ul>
                                    <li><code>HTML/css</code> - Stylesheet files</li>
                                    <li><code>HTML/images</code> - Images files</li>
                                    <li><code>HTML/js</code> - Javacript files</li>
                                    <li><code>HTML/sass</code> - Sass files</li>
                                    <li><code>HTML/vendor</code> – All external libs.</li>
                                </ul>
                            </li>
                            <li><code>HTML/index.html</code> - Homepage
                        </ul>
                    </li>
                    <li>You should upload all or specific HTML files as per your need.</li>
                    <li>You are good to go for adding your content now!</li>
                </ol>
            </section>

            <hr class="divider">
        </div>
    </div>
    @endsection