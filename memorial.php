<a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="during_War.php">During War</a>
                    </li>
                    <li>
                        <a href="after_War.php">After War</a>
                    </li>
                    <li>
                        <a href="memorial.php">Memorial</a>
                    </li>
                    <li>
                        <a href="pictures.php">Pictures</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li><html>
<head>
    <Title>Memorials</title>
    <link href="includes/style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <h1 class="Body">Memorials</h1>
    </div>
    <?php
        include 'includes/year_menu.txt'
    ?>
    <?php
        include 'includes/db.inc.php'
    ?>
        <Table class="MemorialTable">
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Amberley Memorial"><a href='memorial_Page.php?Memorial=Amberley'><img src="graphics/memorial_Button/AmberleySmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="All the information about the Avening Memorial"><a href='memorial_Page.php?Memorial=Avening'><img src="graphics/memorial_Button/AveningSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="All the information about the Forest Green Memorial"><a href='memorial_Page.php?Memorial=Forest'><img src="graphics/memorial_Button/ForestGreenSmall.jpg"></a></span></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Horsley Memorial"><a href='memorial_Page.php?Memorial=Horsley'><img src="graphics/memorial_Button/HorsleySmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="All the information about the Minchinhampton Memorial"><a href='memorial_Page.php?Memorial=Minchinhampton'><img src="graphics/memorial_Button/MinchinhamptonSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="All the information about the Nympsfield Memorial"><a href='memorial_Page.php?Memorial=Nympsfield'><img src="graphics/memorial_Button/NympsfieldSmall.jpg"></a></span></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Rodborough Memorial"><a href='memorial_Page.php?Memorial=Rodborough'><img src="graphics/memorial_Button/RodboroughSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="All the information about the Shortwood Memorial"><a href='memorial_Page.php?Memorial=Shortwood'><img src="graphics/memorial_Button/ShortwoodSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="All the information about the Gloters Memorial"><a href='memorial_Page.php?Memorial=Gloters'><img src="graphics/memorial_Button/GlotersSmall.jpg"></a></span></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Woodchester Memorial"><a href='memorial_Page.php?Memorial=Wodchester'><img src="graphics/memorial_Button/WoodchesterSmall.jpg"></a></span></td>
            </tr>
            <tr class="MemorialTableGap"></tr>
        </Table>
</body>
</html>