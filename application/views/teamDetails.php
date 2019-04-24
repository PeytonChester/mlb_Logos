<?php $this->view('head'); ?>

<!--content-->
<div class="teamDetailsWrapper">

    <div class="teamDetailsLeft">
        <div class="primaryLogos">
            <div class="primaryLogoBanner">
                <p>Primary Logos</p>
            </div>
            <?php foreach ($primaryLogos as $pLogo): ?>
                <div class="logo">
                    <a href="<?php echo config_item('base_uri').$pLogo['logoURL']?>" data-lightbox="primaryImages" data-title=<?php echo $pLogo["datesUsed"]; ?>>
                    <div class="primaryLogo" style="background-image: url(<?php echo config_item('base_uri').$pLogo['logoURL'] ?>);"></div></a>
                    <div class="logoDate"><?php echo $pLogo["datesUsed"]; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="alternateLogos">
            <div class="alternateLogoBanner">
                <p>Alternate Logos</p>
            </div>
            <?php foreach ($alternateLogos as $aLogo): ?>
                <div class="logo">
                    <div class="alternateLogo" style="background-image: url(<?php echo config_item('base_uri').$aLogo['logoURL'] ?>);"></div>
                    <div class="logoDate"><?php echo $aLogo["datesUsed"]; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



    <div class="teamDetailsRight">
        <div class="teamDetailsNameBanner">
            <div class="nameBannerLeft">
                <i class="far fa-heart"></i>
                <?php foreach ($teams as $team): ?>
                    <div class="detailsTeamName">
                        <?php echo $team["teamName"]; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="nameBannerRight">
                <?php foreach ($teams as $team): ?>
                    <div class="detailsTeamLocation">
                        <?php echo $team["city"].', '.$team["state"]?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="leagueAndFacilities">
            <div class="league">
                <div class="leagueBanner">
                    <?php foreach ($teams as $team): ?>
                        <div>
                            <?php echo $team["league"].', '.$team["division"]?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="leagueLogo" style="background-image: url(<?php echo config_item('base_uri').$team['leagueLogoURL'] ?>);"></div>

            </div>

            <div class="facilities">
                <div class="facilityBanner">
                    <i class="fas fa-arrow-circle-left fa-2x"></i>

                    <i class="fas fa-arrow-circle-right fa-2x"></i>
                </div>

                <div class="currentFacility">
                <?php foreach ($currentFacility as $facility): ?>
                    <div class="facility">
                        <div class="facilityImage" style="background-image: url(<?php echo config_item('base_uri').$facility['facilityURL'] ?>);"></div>
                    </div>
                <?php endforeach; ?>
                </div>

                <div class="pastFacility">
                    <?php foreach ($pastFacility as $facility): ?>
                        <div class="facility">
                            <div class="facilityImage" style="background-image: url(<?php echo config_item('base_uri').$facility['facilityURL'] ?>);"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="playerBanner">
            <p>PROMINENT FIGURES</p>
        </div>
        <div class="figureDiv">
            <div class="playerHistory">
                <div class="figureBanner">
                    <p>Players</p>
                </div>
                <?php foreach ($players as $player): ?>
                    <div class="figure">
                        <div class="figurePicture" style="background-image: url(<?php echo config_item('base_uri').$player['portraitURL'] ?>);">
                        </div>
                        <div class="figureInfo">
                            <div class="playerName"><?php echo $player["playerName"]?></div>
                            <div class="playerTeamHistory"><?php echo $player["yearsPlayed"]?></div>
                            <div class="historicEvents"><?php echo $player["historicEvents"]?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="coachHistory">
                <div class="figureBanner">
                    <p>Coaches</p>
                </div>
                <?php foreach ($coaches as $coach): ?>
                    <div class="figure">
                        <div class="figurePicture" style="background-image: url(<?php echo config_item('base_uri').$coach['portraitURL'] ?>);">
                        </div>
                        <div class="figureInfo">
                            <div class="coachName"><?php echo $coach["coachName"]?></div>
                            <div class="coachYearsCoached"><?php echo $coach["yearsCoached"]?></div>
                            <div class="historicEvents"><?php echo $coach["historicEvents"]?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="ownerHistory">
                <div class="figureBanner">
                    <p>Owners</p>
                </div>
                <?php foreach ($owners as $owner): ?>
                    <div class="figure">
                        <div class="figurePicture" style="background-image: url(<?php echo config_item('base_uri').$owner['portraitURL'] ?>);">
                        </div>
                        <div class="figureInfo">
                            <div class="coachName"><?php echo $owner["ownerName"]?></div>
                            <div class="coachYearsCoached"><?php echo $owner["yearsInvolved"]?></div>
                            <div class="historicEvents"><?php echo $owner["historicEvents"]?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>

<?php $this->view('footer'); ?>