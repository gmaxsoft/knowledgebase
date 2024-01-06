@extends('layouts.view')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentation') }}
        </h2>
    </x-slot>

    @guest
    <div class="py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg border-page">
            <div class="p-6 text-gray-900">
                {{ __("You're not logged in! Please Log in to explore this page!.") }}
                <br /><br />
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
        </div>
    </div>
    </div>
    @else
    <div class="idocs-navigation bg-light">
        <ul class="nav flex-column ">
            <li class="nav-item"><a class="nav-link active" href="#docs_1">Linux</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#docs_2">WSL Installation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs_3">WSL Commands</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#docs_layout">Docker</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#docs_4">Docker Installation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs_5">Docker Commands</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#docs_content">Github</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#docs_6">Github Installation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs_7">Github Commands</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#docs_components">Laravel</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#docs_8">Laravel Installation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs_9">Laravel Artisan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs_10">Laravel Commands</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs_11">Laravel Production</a></li>
                    
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#docs_12">Composer</a>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#docs_13">Composer Installation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs_14">Composer Commands</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#docs_15">MYSQL</a></li>
        </ul>
    </div>

    <div class="idocs-content-dash">
        <div class="container">

            <section id="docs_1">
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

            <section id="docs_2">
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

            <section id="docs_3">
          <h2>HTML Structure</h2>
          <p>docs follows a simple and easy to customize coding structure. Here is the sample for your reference:<br>
            The template is based on <a class="ml-1" target="_blank" href="https://getbootstrap.com/"><i class="fas fa-external-link-alt"></i> Bootstrap Framework</a></p>
          <pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;

&lt;!-- Your Title, Description, Stylesheets
============================================= --&gt;

&lt;/head&gt;

&lt;body data-spy=&quot;scroll&quot; data-target=&quot;.docs-navigation&quot; data-offset=&quot;125&quot;&gt;

&lt;!-- Document Wrapper   
=============================== --&gt;
&lt;div id=&quot;main-wrapper&quot;&gt; 
  
  &lt;!-- Header
  ============================ --&gt;
  &lt;header id=&quot;header&quot; class=&quot;sticky-top&quot;&gt;
   ......
  &lt;/header&gt;
  &lt;!-- Header End --&gt; 
  
  &lt;!-- Content
  ============================ --&gt;
  &lt;div id=&quot;content&quot; role=&quot;main&quot;&gt; 
    
    &lt;!-- Sidebar Navigation
    ============================ --&gt;
    &lt;div class=&quot;docs-navigation bg-light&quot;&gt;
     .....
    &lt;/div&gt;
    
    &lt;!-- Docs Content
    ============================ --&gt;
    &lt;div class=&quot;docs-content&quot;&gt;
      &lt;div class=&quot;container&quot;&gt;
        .......
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Content end --&gt; 
  
  &lt;!-- Footer --&gt;
  &lt;footer id=&quot;footer&quot; class=&quot;section bg-dark footer-text-light&quot;&gt;
    &lt;div class=&quot;container&quot;&gt; ...... &lt;/div&gt;
  &lt;/footer&gt;
  &lt;!-- Footer end --&gt; 
  
&lt;/div&gt;
&lt;!-- Document Wrapper end --&gt; 

&lt;!-- JavaScript --&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
          <p class="alert alert-info">If you need more information, please visit bootstrap site: <a target="_blank" href="https://getbootstrap.com/docs/4.4/layout/grid/">https://getbootstrap.com</a></p>
        </section>
        
		<hr class="divider">

        <section id="docs_sass">
          <h2>Sass</h2>
          <p>We have added SASS <code>.scss</code> files in template. If you know how to use SASS you can change sass files and compile the css as well.
            You can find sass file here - <code>HTML/assets/sass</code></p>
          <p>Open the <code>sass/_variables.scss</code> and Edit the values according to your needs. If you need more Advanced Setup then you can Edit the Respective Files yourself which have been branched inside the same Folder. It is completely at your discretion only to include the Required <code>.scss</code> Files you need to minimize the amount of CSS & including only the Styles of the Blocks you need. This can be setup in your <code>stylesheet.scss</code> File.</p>
        </section>
        
		<hr class="divider">

      

        </div>
    </div>
    @endguest
    @endsection