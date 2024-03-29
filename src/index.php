<?php
// Founding Date
$now = new DateTime();
$birthday = new DateTime("2022-10-22");
$age_diff = $now->diff($birthday);

$months = $age_diff->y * 12 + $age_diff->m;
?>

<html>

<head>
    <title>NixLabs - Homepage</title>
    <link href="assets/styles.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="intro" class="section">
        <h1><span class="brand">NiX</span>Labs</h1>
        <p>Welcome to NixLabs, a cozy corner of the internet where developers like you come together to support small open-source projects. Founded <?php echo $months; ?> months ago, we believe in the power of community and collaboration, working side by side to bring new ideas to life. From simple bash scripts to complex full-stack applications, our projects reflect the diverse interests and talents of our members. Whether you're a seasoned coder or just passionate about open-source, NixLabs is your home for making a difference on the net. From servers, to programmers, to eyes on your project, we do whatever we to aid in the progression of great open-source programs and tools. If you want to join us, a great place to start is <a class="brand" href="https://discord.gg/phEf3q2fFF">our discord</a>.</p>
        <br>
        <p>NixLabs does not condone piracy of any kind. In the case of a DMCA request, please look <a href="dmca.php" class="brand">here</a> for the DMCA policy and related restrictions / processing guidelines.</p>
        <br>
        <h2>How are we funded</h2>
        <p>Since we are basically a charity, our founder Owen also sells colocation and server hosting services personally that aid in the finances of NixLabs. Most of that income is invested into the servers and software required to keep NixLabs operational. We also take donations (however our donations page isnt quite operational yet) from all kinds of people who believe in our mission.</p>

        <br>
        <h2>Who we help</h2>
        <ul>
            <li>Open-Source Projects</li>
            <li>Students & Educators</li>
            <li>Independent Developers</li>
            <li>Anyone willing to learn or share their knowledge</li>
        </ul>
        <br>
        <h2>Our Projects</h2>
        <ul>
            <li><a class="brand" href="https://deliria.live">Deliria Radio</a>: Module music from the 90s and beyond (Sponsored)</li>
            <li><a class="brand" href="https://wii-linux.org">Wii Linux</a>: A project to get VoidLinux running on the Nintendo Wii (Sponsored)</li>
            <li><a class="brand" href="https://github.com/Nixlabs-Dev/PurpleRoute">PurpleRoute</a>: A router backup utility built for Kubernetes</li>
        </ul>

        <br>
        <h2>Current Services</h2>
        <ul>
            <li>NixLabs Cloud: A free VPS provider for our members!</li>
            <li>NixLabs GitLab: A hosted git platform with unlimited CI services. <b>(coming soon)</b></li>
            <li>NixLabs Pages: A staic-site hosting platform, free to all of our members. <b>(coming soon)</b></li>
        </ul>

        
    </div>
    <?php require "./partials/footer.php" ?>
</body>
<html>
