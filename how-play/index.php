<?php include '../layouts/header-link.php' ?>
<?php include '../layouts/header.php' ?>

<link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/how-play.min.css">
<main class="main-scrollbar">
    <section class="all-section how-to-play">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="headingTitle fs-18 fs-sm-24 fs-md-32 fw-bold text-center">
                            <span class="text-theme3">How to <span class="text-theme1">Play</span></span>
                            <hr class="w-50px w-md-100px h-3px h-md-5px rounded-50 opacity-100 bg-theme1 mx-auto my-2">
                        </h2>
                    </div>
                </div>
                <div class="col-12 mt-3 mt-md-5">
                    <ul class="nav nav-pills mb-3 w-100 justify-content-between d-block d-md-flex bg-theme3 " id="pills-tab" role="tablist">
                        <li class="nav-item w-100 w-md-25 my-1 my-md-0 border-theme1 border-end" role="presentation">
                            <button class="nav-link w-100 px-3 px-md-2 px-lg-3 text-start text-md-center rounded-0 text-white active" id="pills-introduction-tab" data-bs-toggle="pill" data-bs-target="#pills-introduction" type="button" role="tab" aria-controls="pills-introduction" aria-selected="true">Introduction</button>
                        </li>
                        <li class="nav-item w-100 w-md-25 my-1 my-md-0 border-theme1 border-end" role="presentation">
                            <button class="nav-link w-100 px-3 px-md-2 px-lg-3 text-start text-md-center rounded-0 text-white" id="pills-create-team-tab" data-bs-toggle="pill" data-bs-target="#pills-create-team" type="button" role="tab" aria-controls="pills-create-team" aria-selected="false">Create Your Team</button>
                        </li>
                        <li class="nav-item w-100 w-md-25 my-1 my-md-0 border-theme1 border-end" role="presentation">
                            <button class="nav-link w-100 px-3 px-md-2 px-lg-3 text-start text-md-center rounded-0 text-white" id="pills-manage-team-tab" data-bs-toggle="pill" data-bs-target="#pills-manage-team" type="button" role="tab" aria-controls="pills-manage-team" aria-selected="false">Managing Your Team</button>
                        </li>
                        <li class="nav-item w-100 w-md-25 my-1 my-md-0" role="presentation">
                            <button class="nav-link w-100 px-3 px-md-2 px-lg-3 text-start text-md-center rounded-0 text-white" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="false">Account Balance</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3 mt-md-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction" role="tabpanel" aria-labelledby="pills-introduction-tab">
                            <div class="intro">
                                <p class="fs-14 fs-sm-15  lh-5"><strong>IMG Fantasy</strong> is India’s biggest Sports Game with an exponentially growing user base of over 2 crore sports fans.</p>
                                <p class="fs-14 fs-sm-15  mt-3 lh-5"><strong>IMG Fantasy</strong> is played by using your sport knowledge and skill. You can pick your own team made up of real players for Cricket, Football, NBA. Create your team within a maximum budget of 100 credits. Your team earns points based on your chosen players' performance in the real-life matches. It's time to showcase your skill and go for glory!</p>
                                <div class="steps mt-3 mt-md-5">
                                    <h5 class="fs-15 fs-sm-16 fw-sm-18 fw-bold ">Follow these 5 easy steps to get started:</h5>
                                    <ul class=" mt-3 mb-0">
                                        <li class="">
                                            <p class="fs-15 fs-sm-16  fw-600 m-0">Select A Match:</p>
                                            <span class="fs-14 fs-sm-15 fw-light ">Select any of the upcoming matches from any of the current or upcoming cricket series</span>
                                        </li>
                                        <li class=" mt-3">
                                            <p class="fs-15 fs-sm-16  fw-600 m-0">Create Your Team:</p>
                                            <span class="fs-14 fs-sm-15 fw-light ">Use your sports knowledge and showcase your skills to create your <strong>IMG Fantasy</strong> team within a budget of 100 credits</span>
                                        </li>
                                        <li class=" mt-3">
                                            <p class="fs-15 fs-sm-16  fw-600 m-0">Join a Contest:</p>
                                            <span class="fs-14 fs-sm-15 fw-light ">Join any <strong>IMG Fantasy</strong> free or cash contest to win cash and the ultimate bragging rights to showoff your improvement in the Free/Skill contests on <strong>IMG Fantasy</strong>!</span>
                                        </li>
                                        <li class=" mt-3">
                                            <p class="fs-15 fs-sm-16  fw-600 m-0">JFollow the Match:</p>
                                            <span class="fs-14 fs-sm-15 fw-light ">Watch the real match and track your fantasy scorecard (updated every 2 minutes)</span>
                                        </li>
                                        <li class=" mt-3">
                                            <p class="fs-15 fs-sm-16  fw-600 m-0">Withdraw your Winnings:</p>
                                            <span class="fs-14 fs-sm-15 fw-light ">Instantly withdraw your winnings from your <strong>IMG Fantasy</strong> account (One Time Verification required)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-create-team" role="tabpanel" aria-labelledby="pills-create-team-tab">
                            <div class="intro">
                                <div class="fristStep pb-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="fs-15 fs-sm-16 "><span class="fs-20 fw-bold">Step 1: </span> Select a Match</h6>
                                        </div>
                                        <div class="col-12 col-md-5 mt-3">
                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Select any upcoming match from the list of ongoing and upcoming cricket series and click on the ‘<strong>Create Team</strong>’ button.</P>
                                            <p class="fs-14 fs-sm-15  lh-5 m-0">Create your <strong>IMG Fantasy</strong> team by picking 11 players as per the following combinations (C1,C2,C3...) within a budget of 100 credits.</p>
                                        </div>
                                        <div class="col-12 col-md-7 mt-3">
                                            <div class="customTable">
                                                <table class="table ">
                                                    <thead>
                                                        <tr class="bg-theme3 border-theme3 border-1">
                                                            <th class="border-0 fs-14 fs-sm-16 text-white" scope="col">Player type</th>
                                                            <th class="border-0 fs-14 fs-sm-16 text-white" scope="col">Minimum</th>
                                                            <th class="border-0 fs-14 fs-sm-16 text-white" scope="col">Maximum</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="border-top-0">
                                                        <tr class="">
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">WK</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">1</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">4</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">Bat</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">3</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">AR</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">1</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">4</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">Bowl</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">3</td>
                                                            <td class="fs-14 fs-sm-16 border-theme3 border border-top-0">6</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondStep py-3 border-top border-2 border-theme3">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="fs-15 fs-sm-16 "><span class="fs-20 fw-bold">Step 2: </span>  Create your Team</h6>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Select players for your <strong>IMG Fantasy</strong> team from all 4 of the categories mentioned below:</P>
                                            <ul class="mt-3 mb-0  fs-14 fs-sm-15" style="padding-left: 20px !important;">
                                                <li><p class="mb-2 mb-sm-auto">WK - Wicket-keeper</p></li>
                                                <li><p class="mb-2 mb-sm-auto">BAT - Batsmen</p></li>
                                                <li><p class="mb-2 mb-sm-auto">BWL - Bowlers</p></li>
                                                <li><p class="mb-2 mb-sm-auto">AR - All-rounders</p></li> 
                                            </ul>
                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Check player info by clicking on the player image.</P>
                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Sort players as per their teams, credits or points.</P>

                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Keep an eye on:</P>
                                            <ul class="mt-3 mb-0  fs-14 fs-sm-15" style="padding-left: 20px !important;">
                                                <li><p class="mb-2 mb-sm-auto">Number of players added to your team</p></li>
                                                <li><p class="mb-2 mb-sm-auto">Available credits</p></li>
                                                <li><p class="mb-2 mb-sm-auto">The deadline for team submission</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="thirdStep py-3 border-top border-2 border-theme3">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="fs-15 fs-sm-16 "><span class="fs-20 fw-bold">Step 3: </span>  Select your <strong>IMG Fantasy</strong> team’s Captain & Vice Captain</h6>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">After creating your <strong>IMG Fantasy</strong> team, choose a Captain & Vice Captain for the team.</P>
                                            <ul class="mt-3 mb-0  fs-14 fs-sm-15" style="padding-left: 20px !important;">
                                                <li><p class="mb-2 mb-sm-auto">Captain - Gets <strong>2x</strong> points scored by him in the actual game</p></li>
                                                <li><p class="mb-2 mb-sm-auto">Vice Captain - Gets <strong>1.5x</strong> points scored by him in the actual game</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="fourthStep py-3 border-top border-2 border-theme3">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="fs-15 fs-sm-16 "><span class="fs-20 fw-bold">Step 4: </span>  Join Contest</h6>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Join any <strong>IMG Fantasy</strong> free or cash contest to win cash and the ultimate bragging rights to showoff your improvement in the Free/Skill contests on <strong>IMG Fantasy</strong>!</P>
                                        </div>
                                    </div>
                                </div>
                                <div class="fifthStep pt-3 border-top border-2 border-theme3">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="fs-15 fs-sm-16 "><span class="fs-20 fw-bold">Step 5: </span>  Creating multiple teams</h6>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <P class="fs-14 fs-sm-15  mb-2 lh-5">You can create upto 11 teams per match and choose to join a contests with any of the teams created!</P>
                                            <p class="fs-14 fs-sm-15  mb-2 lh-5">Click on 'CREATE TEAM' for creating next team</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-manage-team" role="tabpanel" aria-labelledby="pills-manage-team-tab">
                            <div class="intro">
                            <P class="fs-14 fs-sm-15  mb-2 lh-5">You can make as many changes to your <strong>IMG Fantasy</strong> teams as you like until the <strong>deadline</strong> of that match!</P> 
                            <P class="fs-14 fs-sm-15  mb-2 lh-5">You can also change your Captain or Vice Captain before the deadline of the match. Select the “<strong>Edit Team</strong>” button to make changes to your team.</P> 
                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Make sure you keep an eye on which of your players are playing the match and keep your session updated at all times.</P> 
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                            <div class="intro">
                            <P class="fs-14 fs-sm-15  mb-2 lh-5">You can view, <strong>withdraw or deposit</strong> money into your <strong>IMG Fantasy</strong> account anytime by going to the “<strong>My Account</strong>” link.</P>
                            <P class="fs-14 fs-sm-15  mb-2 lh-5">You will need to go through a One Time Account Verification process before you withdraw any money from your <strong>IMG Fantasy</strong> account. Don’t worry – this process wont take time and will not be repeated unless you change any of your details.</P>
                            <P class="fs-14 fs-sm-15  mb-2 lh-5">Money in your <strong>IMG Fantasy</strong> account is divided into 3 categories:</P>
                            <P class="fs-14 fs-sm-15  mb-2 lh-5"><strong>Unutilized:</strong> If you have deposited any amount but have not yet joined any league using this amount, it will be categorized as Unutilized in your <strong>IMG Fantasy</strong> account</P>
                            <P class="fs-14 fs-sm-15  mb-2 lh-5"><strong>Winnings:</strong> The amount of money earned as “winnings” through any cash leagues joined. No processing fees will be deducted if you wish to withdraw any amount from your Winnings!</P>
                            <P class="fs-14 fs-sm-15  mb-2 lh-5"><strong>Cash Bonus:</strong> It’s on us! This is given by <strong>IMG Fantasy</strong> to you, and can be used to join any public cash leagues and win more cash! This cash bonus comes with an expiry date so make full use of this freebie and get started!</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php include '../layouts/footer.php' ?>
<?php include '../layouts/footer-link.php' ?>