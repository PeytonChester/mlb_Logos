<div id="container">
    <div id="teamsWrapper">
        <div class="contentWrapper teamContentWrapper">
            <div class="searchDiv">
                <div class="searchSide">
                    <p style="margin:0;">ORDER BY:</p>
                    <div class="mySelect">
                        <select id="orderSelect">
                            <option value="0">CITY</option>
                            <option value="1">STATE</option>
                            <option value="2">TEAM NAME</option>
                        </select>
                    </div>
                </div>
                <div class="searchSide">
                    <div class="searchBar">
                        <i class="fas fa-search"></i>
                        <p>search for a team...</p>
                    </div>
                </div>
            </div>
            <div class="teamsHolder container-fluid">

                <?php foreach ($teams as $team): ?>

                    <a href="<?php echo base_url().'home/teamDetails/'.$team["teamID"]?>">
                        <div class="team">
                            <div class="teamLogo">
                                <img src="<?php echo config_item('base_uri').$team['logoURL'] ?>">
                            </div>
                            <div class="teamName"><?php echo $team["teamName"]?></div>
                            <div class="teamLocation"><?php echo $team["city"].", ".$team["state"]?></div>
                        </div>
                    </a>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>