<!DOCTYPE html>
<html lang="ro">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow" />
  <meta name="description" content="Pagina creata cu scopul de a-i ajuta pe elevi sa invete mai usor informatica , respectiv multimile pe Vectori">
  <meta name="author" content="Alexandru Scanteie">
  <meta name="keywords" content="informatica,multimi,vectori,tablouri-unidimensionale,reuniune,intersectie,diferenta,c++,programare">

  <!-- Page Title -->
  <title>Multimi pe vectori</title>
  <!-- / -->

  <!---Font Icon-->
  <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="static/plugin/et-line/style.css" rel="stylesheet">
  <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
  <!-- / -->

  <!-- Plugin CSS -->
  <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <!-- / -->

  <!-- Theme Style -->
  <link href="static/css/styles.css" rel="stylesheet">
  <link href="static/css/color/default.css" rel="stylesheet" id="color_theme">



  <!-- / -->

  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" />
  <!-- / -->
</head>

<!-- Body Start -->
<body>
  
  <!-- Loading -->
  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <!-- / -->

  <!-- Header -->
  <header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html">Multimi pe vectori <span class="theme-bg"></span></a>
        

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarshark" aria-controls="navbarshark" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        

        <!-- Top Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarshark">
          <ul class="navbar-nav ml-auto">
            <li><a class="nav-link " href="index.html">Home</a></li>
            <!-- <li><a class="nav-link" href="features.html">Features</a></li> -->
            <li><a class="nav-link active" href="probleme.html">Probleme</a></li>
            <li><a class="nav-link" href="echipa.html">Echipa</a></li>
            <li><a class="nav-link " href="https://cdn.discordapp.com/attachments/853658290239307826/853658740128481280/MultimiPeVectori.rar" ><i class="fa fa-download" aria-hidden="true"></i>  Download </a></li>


          </ul>
        </div>
        
      </nav> <!-- Navbar -->     
    </div>
  </header>
  <!-- Header End -->
  
  <!-- Main Start -->
  <main>

    <!-- Home Banner -->
    <section class="page-header theme-g-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10 text-center">
            <h2>Probleme PBINFO</h2>
            <ol class="breadcrumb justify-content-center">
                <li><a href="index.html">Home</a></li>
                <li class="active">Probleme PBINFO</li>
            </ol>
          </div>
        </div>
      </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Price -->
    <section class="price-section p-60px-tb sm-p-40px-tb">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center m-40px-b sm-m-30px-b">
            <div class="section-title">
              <span class="theme-g-bg"></span>
              <h2>Probleme PBINFO</h2>
            </div>
          </div> <!-- col -->
        </div> <!-- row -->

        <div class="row">
          <div class="col-md-4">
            <div class="price-table sm-m-30px-b">
              <div class="price-head">
                <div class="price-label">
                  <h5><a href="https://www.pbinfo.ro/probleme/241/interclasare">#241 Interclasare</a> 
</h5>
                </div><!-- price-label -->

                <div class="price-tag">
                </div><!-- price-tag -->
              </div><!-- price-head -->
              <div class="price-content">
                <ul> 
                   <pre class="cpp" style="font-family:monospace;"><span style="color: #339900;">#include &lt;bits/stdc++.h&gt;</span> 
                    &nbsp;
<span style="color: #0000ff;">using</span> <span style="color: #0000ff;">namespace</span> std<span style="color: #008080;">;</span>
                    &nbsp;
ifstream <span style="color: #0000dd;">cin</span><span style="color: #008000;">&#40;</span><span style="color: #FF0000;">&quot;interclasare.in&quot;</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span>
ofstream <span style="color: #0000dd;">cout</span><span style="color: #008000;">&#40;</span><span style="color: #FF0000;">&quot;interclasare.out&quot;</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span>
&nbsp;
<span style="color: #0000ff;">int</span> main<span style="color: #008000;">&#40;</span><span style="color: #008000;">&#41;</span>
<span style="color: #008000;">&#123;</span>
    <span style="color: #0000ff;">int</span> n, m, k <span style="color: #000080;">=</span> <span style="color: #0000dd;">0</span><span style="color: #008080;">;</span>
<span style="color: #0000ff;">int</span> a<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">100001</span><span style="color: #008000;">&#93;</span>, b<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">100001</span><span style="color: #008000;">&#93;</span>, c<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">200001</span><span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> n<span style="color: #008080;">;</span>
    <span style="color: #0000ff;">for</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span> i <span style="color: #000080;">&lt;=</span> n<span style="color: #008080;">;</span> <span style="color: #000040;">++</span>i<span style="color: #008000;">&#41;</span>
        <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> m<span style="color: #008080;">;</span>
    <span style="color: #0000ff;">for</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span> i <span style="color: #000080;">&lt;=</span> m<span style="color: #008080;">;</span> <span style="color: #000040;">++</span>i<span style="color: #008000;">&#41;</span>
        <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> b<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
&nbsp;
    <span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span>, j <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span>
&nbsp;
    <span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span>i <span style="color: #000080;">&lt;=</span> n <span style="color: #000040;">&amp;&amp;</span> j <span style="color: #000080;">&lt;=</span> m<span style="color: #008000;">&#41;</span>
        <span style="color: #0000ff;">if</span><span style="color: #008000;">&#40;</span>a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span> <span style="color: #000080;">&lt;</span> b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span><span style="color: #008000;">&#41;</span>
            c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span>, i<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
        <span style="color: #0000ff;">else</span>
            c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span>, j<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
&nbsp;
    <span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span>i <span style="color: #000080;">&lt;=</span> n<span style="color: #008000;">&#41;</span>
        c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span>, i<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
&nbsp;
    <span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span>j <span style="color: #000080;">&lt;=</span> m<span style="color: #008000;">&#41;</span>
        c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span>, j<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
&nbsp;
    <span style="color: #0000ff;">for</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span> i <span style="color: #000080;">&lt;=</span> k<span style="color: #008080;">;</span> <span style="color: #000040;">++</span>i<span style="color: #008000;">&#41;</span><span style="color: #008000;">&#123;</span>
        <span style="color: #0000dd;">cout</span> <span style="color: #000080;">&lt;&lt;</span> c<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span> <span style="color: #000080;">&lt;&lt;</span> <span style="color: #FF0000;">&quot; &quot;</span><span style="color: #008080;">;</span>
        <span style="color: #0000ff;">if</span><span style="color: #008000;">&#40;</span>i <span style="color: #000040;">%</span> <span style="color: #0000dd;">10</span> <span style="color: #000080;">==</span> <span style="color: #0000dd;">0</span><span style="color: #008000;">&#41;</span>
            <span style="color: #0000dd;">cout</span> <span style="color: #000080;">&lt;&lt;</span> endl<span style="color: #008080;">;</span>
    <span style="color: #008000;">&#125;</span>
&nbsp;
    <span style="color: #0000ff;">return</span> <span style="color: #0000dd;">0</span><span style="color: #008080;">;</span>
<span style="color: #008000;">&#125;</span></pre>
                </ul>   
              </div><!-- price-content -->
              <div class="price-footer">
                
              </div><!-- price-footer -->
            </div> <!-- Price Table -->
          </div> <!-- col -->

          <div class="col-md-4">
            <div class="price-table  sm-m-30px-b">
              <div class="price-head">
                <div class="price-label">
                  <h5><a href="https://www.pbinfo.ro/probleme/250/interclasare1">#250 Interclasare1 </a></h5>
                </div><!-- price-label -->

                <div class="price-tag">
                  
                </div><!-- price-tag -->
              </div><!-- price-head -->
              <div class="price-content">
                <ul>
                  <pre class="cpp" style="font-family:monospace;"><span style="color: #339900;">#include &lt;bits/stdc++.h&gt;</span>
<span style="color: #0000ff;">using</span> <span style="color: #0000ff;">namespace</span> std<span style="color: #008080;">;</span>
&nbsp;
ifstream <span style="color: #0000dd;">cin</span><span style="color: #008000;">&#40;</span><span style="color: #FF0000;">&quot;interclasare1.in&quot;</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span>
ofstream <span style="color: #0000dd;">cout</span><span style="color: #008000;">&#40;</span><span style="color: #FF0000;">&quot;interclasare1.out&quot;</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span>
<span style="color: #0000ff;">int</span> main<span style="color: #008000;">&#40;</span><span style="color: #008000;">&#41;</span>
<span style="color: #008000;">&#123;</span>
    <span style="color: #0000ff;">int</span> n, m, k <span style="color: #000080;">=</span> <span style="color: #0000dd;">0</span><span style="color: #008080;">;</span>
    <span style="color: #0000ff;">int</span> a<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">100001</span><span style="color: #008000;">&#93;</span>, b<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">100001</span><span style="color: #008000;">&#93;</span>,c<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">200001</span><span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> n<span style="color: #008080;">;</span>
    <span style="color: #0000ff;">for</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span> i <span style="color: #000080;">&lt;=</span> n<span style="color: #008080;">;</span> <span style="color: #000040;">++</span>i<span style="color: #008000;">&#41;</span>
        <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> m<span style="color: #008080;">;</span>
    <span style="color: #0000ff;">for</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span> i <span style="color: #000080;">&lt;=</span> m<span style="color: #008080;">;</span> <span style="color: #000040;">++</span>i<span style="color: #008000;">&#41;</span>
        <span style="color: #0000dd;">cin</span> <span style="color: #000080;">&gt;&gt;</span> b<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span>, j <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span>
    <span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span>i <span style="color: #000080;">&lt;=</span> n <span style="color: #000040;">&amp;&amp;</span> j <span style="color: #000080;">&lt;=</span> m<span style="color: #008000;">&#41;</span>
        <span style="color: #0000ff;">if</span><span style="color: #008000;">&#40;</span>a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span> <span style="color: #000080;">&lt;</span> b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span><span style="color: #008000;">&#41;</span>
            c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span>, i<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
        <span style="color: #0000ff;">else</span>
            <span style="color: #0000ff;">if</span><span style="color: #008000;">&#40;</span>a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span> <span style="color: #000080;">&gt;</span> b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span><span style="color: #008000;">&#41;</span>
                c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span>, j<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
            <span style="color: #0000ff;">else</span>
                i<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
    <span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span>i <span style="color: #000080;">&lt;=</span> n<span style="color: #008000;">&#41;</span>
        c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span>, i<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
    <span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span>j <span style="color: #000080;">&lt;=</span> m<span style="color: #008000;">&#41;</span>
        c<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span>, j<span style="color: #000040;">++</span><span style="color: #008080;">;</span>
&nbsp;
    <span style="color: #0000ff;">for</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> i <span style="color: #000080;">=</span> <span style="color: #0000dd;">1</span><span style="color: #008080;">;</span> i <span style="color: #000080;">&lt;=</span> k<span style="color: #008080;">;</span> <span style="color: #000040;">++</span>i<span style="color: #008000;">&#41;</span><span style="color: #008000;">&#123;</span>
        <span style="color: #0000dd;">cout</span> <span style="color: #000080;">&lt;&lt;</span> c<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span> <span style="color: #000080;">&lt;&lt;</span> <span style="color: #FF0000;">&quot; &quot;</span><span style="color: #008080;">;</span>
        <span style="color: #0000ff;">if</span><span style="color: #008000;">&#40;</span>i <span style="color: #000040;">%</span> <span style="color: #0000dd;">10</span> <span style="color: #000080;">==</span> <span style="color: #0000dd;">0</span><span style="color: #008000;">&#41;</span>
            <span style="color: #0000dd;">cout</span> <span style="color: #000080;">&lt;&lt;</span> endl<span style="color: #008080;">;</span>
    <span style="color: #008000;">&#125;</span>
    <span style="color: #0000ff;">return</span> <span style="color: #0000dd;">0</span><span style="color: #008080;">;</span>
<span style="color: #008000;">&#125;</span></pre>
                </ul>
              </div><!-- price-content -->
              <div class="price-footer">
                
              </div><!-- price-footer -->
            </div> <!-- Price Table -->
          </div> <!-- col -->

          <div class="col-md-4">
            <div class="price-table">
              <div class="price-head">
                <div class="price-label">
                  <h5><a href="https://www.pbinfo.ro/probleme/530/multimi1">#530 Multimi1 </a></h5>
                </div><!-- price-label 
                https://www.pbinfo.ro/probleme/530/multimi1 -->

                <div class="price-tag">
                  
                </div><!-- price-tag -->
              </div><!-- price-head -->
              <div class="price-content">
                <ul><pre class="cpp" style="font-family:monospace;"><span style="color: #339900;">#include &lt;iostream&gt;</span>
<span style="color: #0000ff;">using</span> <span style="color: #0000ff;">namespace</span> std<span style="color: #008080;">;</span>
&nbsp;
<span style="color: #0000ff;">int</span> main <span style="color: #008000;">&#40;</span><span style="color: #008000;">&#41;</span>
&nbsp;
<span style="color: #008000;">&#123;</span>
    <span style="color: #0000ff;">int</span> a<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">100005</span><span style="color: #008000;">&#93;</span>,b<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">100005</span><span style="color: #008000;">&#93;</span>,c1<span style="color: #000080;">=</span><span style="color: #0000dd;">0</span>,c2<span style="color: #000080;">=</span><span style="color: #0000dd;">0</span><span style="color: #008080;">;</span>
    <span style="color: #0000ff;">int</span> n,m,v<span style="color: #008000;">&#91;</span><span style="color: #0000dd;">200010</span><span style="color: #008000;">&#93;</span>,k<span style="color: #000080;">=</span><span style="color: #000040;">-</span><span style="color: #0000dd;">1</span><span style="color: #008080;">;</span>
&nbsp;
    <span style="color: #0000dd;">cin</span><span style="color: #000080;">&gt;&gt;</span>n<span style="color: #008080;">;</span>
    <span style="color: #0000ff;">for</span> <span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> i<span style="color: #000080;">=</span><span style="color: #0000dd;">0</span> <span style="color: #008080;">;</span>i<span style="color: #000080;">&lt;</span>n<span style="color: #008080;">;</span>i<span style="color: #000040;">++</span><span style="color: #008000;">&#41;</span>
         <span style="color: #008000;">&#123;</span><span style="color: #0000dd;">cin</span><span style="color: #000080;">&gt;&gt;</span>a<span style="color: #008000;">&#91;</span>i<span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span><span style="color: #008000;">&#125;</span>
&nbsp;
    <span style="color: #0000dd;">cin</span><span style="color: #000080;">&gt;&gt;</span>m<span style="color: #008080;">;</span>
    <span style="color: #0000ff;">for</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> j<span style="color: #000080;">=</span><span style="color: #0000dd;">0</span><span style="color: #008080;">;</span>j<span style="color: #000080;">&lt;</span>m<span style="color: #008080;">;</span>j<span style="color: #000040;">++</span><span style="color: #008000;">&#41;</span>
        <span style="color: #008000;">&#123;</span><span style="color: #0000dd;">cin</span><span style="color: #000080;">&gt;&gt;</span>b<span style="color: #008000;">&#91;</span>j<span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span><span style="color: #008000;">&#125;</span>
&nbsp;
    <span style="color: #0000ff;">while</span> <span style="color: #008000;">&#40;</span>c1<span style="color: #000080;">&lt;</span>n <span style="color: #000040;">&amp;&amp;</span> c2<span style="color: #000080;">&lt;</span>m<span style="color: #008000;">&#41;</span>
        <span style="color: #008000;">&#123;</span>   <span style="color: #0000ff;">if</span> <span style="color: #008000;">&#40;</span>a<span style="color: #008000;">&#91;</span>c1<span style="color: #008000;">&#93;</span><span style="color: #000080;">&lt;=</span>b<span style="color: #008000;">&#91;</span>c2<span style="color: #008000;">&#93;</span><span style="color: #008000;">&#41;</span>
            <span style="color: #008000;">&#123;</span>v<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span><span style="color: #000080;">=</span> a<span style="color: #008000;">&#91;</span>c1<span style="color: #000040;">++</span><span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #008000;">&#125;</span><span style="color: #0000ff;">else</span> <span style="color: #008000;">&#123;</span>v<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span><span style="color: #000080;">=</span> b<span style="color: #008000;">&#91;</span>c2<span style="color: #000040;">++</span><span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
        <span style="color: #008000;">&#125;</span><span style="color: #008000;">&#125;</span>
    <span style="color: #0000ff;">while</span> <span style="color: #008000;">&#40;</span>c1 <span style="color: #000080;">&lt;</span> n<span style="color: #008000;">&#41;</span> <span style="color: #008000;">&#123;</span>
        v<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> a<span style="color: #008000;">&#91;</span>c1<span style="color: #000040;">++</span><span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #008000;">&#125;</span>
    <span style="color: #0000ff;">while</span> <span style="color: #008000;">&#40;</span>c2 <span style="color: #000080;">&lt;</span> m<span style="color: #008000;">&#41;</span> <span style="color: #008000;">&#123;</span>
        v<span style="color: #008000;">&#91;</span><span style="color: #000040;">++</span>k<span style="color: #008000;">&#93;</span> <span style="color: #000080;">=</span> b<span style="color: #008000;">&#91;</span>c2<span style="color: #000040;">++</span><span style="color: #008000;">&#93;</span><span style="color: #008080;">;</span>
    <span style="color: #008000;">&#125;</span>
<span style="color: #0000ff;">for</span> <span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> t <span style="color: #000080;">=</span> <span style="color: #0000dd;">0</span><span style="color: #008080;">;</span> t <span style="color: #000080;">&lt;</span> m<span style="color: #000040;">+</span>n<span style="color: #008080;">;</span> t<span style="color: #000040;">++</span><span style="color: #008000;">&#41;</span> <span style="color: #008000;">&#123;</span>
   <span style="color: #0000ff;">if</span><span style="color: #008000;">&#40;</span>v<span style="color: #008000;">&#91;</span>t<span style="color: #008000;">&#93;</span><span style="color: #000040;">!</span><span style="color: #000080;">=</span>v<span style="color: #008000;">&#91;</span>t<span style="color: #000040;">+</span><span style="color: #0000dd;">1</span><span style="color: #008000;">&#93;</span><span style="color: #008000;">&#41;</span>
  <span style="color: #0000dd;">cout</span><span style="color: #000080;">&lt;&lt;</span>v<span style="color: #008000;">&#91;</span>t<span style="color: #008000;">&#93;</span><span style="color: #000080;">&lt;&lt;</span><span style="color: #FF0000;">&quot; &quot;</span><span style="color: #008080;">;</span> <span style="color: #008000;">&#125;</span>
<span style="color: #0000dd;">cout</span><span style="color: #000080;">&lt;&lt;</span>endl<span style="color: #008080;">;</span>
<span style="color: #0000ff;">for</span> <span style="color: #008000;">&#40;</span><span style="color: #0000ff;">int</span> r <span style="color: #000080;">=</span> <span style="color: #0000dd;">0</span><span style="color: #008080;">;</span> r <span style="color: #000080;">&lt;</span> m<span style="color: #000040;">+</span>n<span style="color: #008080;">;</span> r<span style="color: #000040;">++</span><span style="color: #008000;">&#41;</span> <span style="color: #008000;">&#123;</span>
   <span style="color: #0000ff;">if</span><span style="color: #008000;">&#40;</span>v<span style="color: #008000;">&#91;</span>r<span style="color: #008000;">&#93;</span><span style="color: #000080;">==</span>v<span style="color: #008000;">&#91;</span>r<span style="color: #000040;">+</span><span style="color: #0000dd;">1</span><span style="color: #008000;">&#93;</span><span style="color: #008000;">&#41;</span>
<span style="color: #0000dd;">cout</span><span style="color: #000080;">&lt;&lt;</span>v<span style="color: #008000;">&#91;</span>r<span style="color: #008000;">&#93;</span><span style="color: #000080;">&lt;&lt;</span><span style="color: #FF0000;">&quot; &quot;</span><span style="color: #008080;">;</span><span style="color: #008000;">&#125;</span>
<span style="color: #008000;">&#125;</span>
&nbsp;


</pre>
                </ul>
              </div><!-- price-content -->
              <div class="price-footer">
                
              </div><!-- price-footer -->
            </div> <!-- Price Table -->
          </div> <!-- col -->


        </div> <!-- row -->
      </div> <!-- container -->
    </section>
    <!--  -->


  </main>
  <!-- Main End -->

 <!-- Footer -->
 <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-5 sm-m-15px-tb">
        <h4>Despre noi</h4>
        <p class="footer-text">Noi suntem echipa Lil Coders şi am creat acest site atât cu scopul de a prezenta colegilor noştri  mulţimile pe vectori, cât şi cu cel de a obţine un 10 la această materie minunată. Pasiunea tuturor este informatică aşa că toţi ne-am adunat şi prin cunoştinţele fiecăruia în acest domeniu am pus cap la cap un site plin de materiale folositoare cu care oricine poate înţelege această temă frumoasă.Aşadar, dragi colegi, vă invităm să asistaţi la prezentarea site-ului muncit de noi. Sper să vă placă!</p>
        <ul class="social-icons">
          <li><a class="github" href="https://github.com/Inf3n0s" target="_blank"><i class="fab fa-github"></i></a></li>
        </ul>
      </div> 

      <div class="col-md-5 col-lg-4 sm-m-15px-tb">
        <h4>Linkuri utile  </h4>
        <div class="d-flex justify-content-around">
          <ul class="list-style">
            <li><a href="https://www.geeksforgeeks.org/union-and-intersection-of-two-sorted-arrays-2/">Functie de intersectie</a></li>
            <li><a href="https://www.geeksforgeeks.org/union-and-intersection-of-two-sorted-arrays-2/">Functie de reuniune </a></li>
            <li><a href="https://www.geeksforgeeks.org/symmetric-difference-two-sorted-array/">Functie de diferenta simetrica</a></li>
            <li><a href="https://www.carabella.ro/acas%C4%83">Site-ul liceului</a></li>
          </ul>
          <ul class="list-style">
            

          </ul>
        </div>
      </div> 

      <div class="col-md-3 col-lg-3 sm-m-15px-tb">
        <h4 class="font-18 font-alt color-white font-w-600 m-0px m-15px-b">Informații despre liceu</h4>
        <p>Strada Locotenent Pârvan Popescu, Nr. 58, Târgoviște, Dâmbovița, 130078 </p>
        <p><span>E-Mail:</span> <a  href="mailto:secretariat@carabella.ro" target="_blank"> secretariat@carabella.ro</a> </p>
        <p><span>Telefon :</span> 0771 091 329</p>
      </div> 

    </div>
    <div class="row">
      <div class="col-12 footer-copy">
        <p class="m-0px"> Copyright © 2021 | Site proiectat și menținut de <a href="https://alexscanteie.com " target="_blank ">Scanteie Alexandru   </a>        </p>
      </div>
    </div> 
  </div>    
</footer>
  <!-- / -->

  <!-- jQuery -->
  <script src="static/js/jquery-3.2.1.min.js"></script>
  <script src="static/js/jquery-migrate-3.0.0.min.js"></script>

  <!-- Plugins -->
  <script src="static/plugin/bootstrap/js/popper.min.js"></script>
  <script src="static/plugin/bootstrap/js/bootstrap.min.js"></script>
  <script src="static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
  <!-- custom -->
  <script src="static/js/custom.js"></script>



</body>
<!-- Body End -->

</html>