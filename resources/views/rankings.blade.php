@extends('layouts.main')
@section("content")
<section class="ranking_page_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ranking_tabs">

                    <ul class="nav nav-tabs tabs_style" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#main_rankings">Main rankings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#pickup_rankings">pick up rankings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="main_rankings" class="tab-pane active">
                            <div class="ranking_filter">
                                <div class="ranking_filter_left">
                                    <h2>Rankings</h2>
                                </div>
                                <div class="ranking_filter_right">
                                    <div class="fillter_select_options">
                                        <div class="form-group">
                                            <label>map filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>Dust II</option>
                                                <option>Inferno</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Rankings filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>Leetify rating</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>time filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>All time</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>match filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>All matches</option>
                                                <option>Big events</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="matches_list">
                                <div class="ranked_box rank_heighlight_page">
                                    <div class="rank_counter">#1</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list inline_tag_list_with_column">
                                        <div class="tag_with_user">
                                            <img src="images/user_1.svg" alt="">
                                            <a href="#">Jabi</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_2.svg" alt="">
                                            <a href="#">TeSes</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_3.svg" alt="">
                                            <a href="#">cadiaN</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_4.svg" alt="">
                                            <a href="#">stavn</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_5.svg" alt="">
                                            <a href="#">Sjush</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ranked_box rank_heighlight_page">
                                    <div class="rank_counter">#2</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list inline_tag_list_with_column">
                                        <div class="tag_with_user">
                                            <img src="images/user_1.svg" alt="">
                                            <a href="#">Jabi</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_2.svg" alt="">
                                            <a href="#">TeSes</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_3.svg" alt="">
                                            <a href="#">cadiaN</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_4.svg" alt="">
                                            <a href="#">stavn</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_5.svg" alt="">
                                            <a href="#">Sjush</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ranked_box rank_heighlight_page">
                                    <div class="rank_counter">#3</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list inline_tag_list_with_column">
                                        <div class="tag_with_user">
                                            <img src="images/user_1.svg" alt="">
                                            <a href="#">Jabi</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_2.svg" alt="">
                                            <a href="#">TeSes</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_3.svg" alt="">
                                            <a href="#">cadiaN</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_4.svg" alt="">
                                            <a href="#">stavn</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_5.svg" alt="">
                                            <a href="#">Sjush</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ranked_box space_before3">
                                    <div class="rank_counter">#4</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#5</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#6</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#7</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#8</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#9</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#10</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#11</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#12</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box space_before13">
                                    <div class="rank_counter">#13</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#14</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#15</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#16</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#17</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#18</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#19</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#20</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#21</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#22</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#23</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div id="pickup_rankings" class="tab-pane fade">

                            <div class="ranking_filter">
                                <div class="ranking_filter_left">
                                    <h2>Pick up Rankings</h2>
                                </div>
                                <div class="ranking_filter_right">
                                    <div class="fillter_select_options">
                                        <div class="form-group">
                                            <label>map filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>Dust II</option>
                                                <option>Inferno</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Rankings filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>Leetify rating</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>time filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>All time</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>match filter</label>
                                            <select class="form-control">
                                                <option>Choose something</option>
                                                <option>All matches</option>
                                                <option>Big events</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="matches_list">
                                <div class="ranked_box rank_heighlight_page">
                                    <div class="rank_counter">#1</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list inline_tag_list_with_column">
                                        <div class="tag_with_user">
                                            <img src="images/user_1.svg" alt="">
                                            <a href="#">Jabi</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_2.svg" alt="">
                                            <a href="#">TeSes</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_3.svg" alt="">
                                            <a href="#">cadiaN</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_4.svg" alt="">
                                            <a href="#">stavn</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_5.svg" alt="">
                                            <a href="#">Sjush</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ranked_box rank_heighlight_page">
                                    <div class="rank_counter">#2</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list inline_tag_list_with_column">
                                        <div class="tag_with_user">
                                            <img src="images/user_1.svg" alt="">
                                            <a href="#">Jabi</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_2.svg" alt="">
                                            <a href="#">TeSes</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_3.svg" alt="">
                                            <a href="#">cadiaN</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_4.svg" alt="">
                                            <a href="#">stavn</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_5.svg" alt="">
                                            <a href="#">Sjush</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ranked_box rank_heighlight_page">
                                    <div class="rank_counter">#3</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list inline_tag_list_with_column">
                                        <div class="tag_with_user">
                                            <img src="images/user_1.svg" alt="">
                                            <a href="#">Jabi</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_2.svg" alt="">
                                            <a href="#">TeSes</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_3.svg" alt="">
                                            <a href="#">cadiaN</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_4.svg" alt="">
                                            <a href="#">stavn</a>
                                        </div>

                                        <div class="tag_with_user">
                                            <img src="images/user_5.svg" alt="">
                                            <a href="#">Sjush</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ranked_box space_before3">
                                    <div class="rank_counter">#4</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#5</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#6</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#7</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#8</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#9</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#10</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#11</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#12</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box space_before13">
                                    <div class="rank_counter">#13</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#14</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#15</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#16</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#17</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#18</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#19</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#20</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#21</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#22</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>
                                <div class="ranked_box">
                                    <div class="rank_counter">#23</div>
                                    <div class="img_with_points">
                                        <img src="images/rank_img.svg" alt=""> +9.5
                                    </div>
                                    <div class="rank_win maps_number">
                                        Maps <span>100</span>
                                    </div>
                                    <div class="percentage_circel">
                                        <div role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                            aria-valuemax="100" style="--value:68"></div>
                                    </div>
                                    <div class="rank_win">
                                        wins <span>24</span>
                                    </div>
                                    <div class="rank_loss">
                                        Loses <span>16</span>
                                    </div>
                                    <div class="raking_avtar">
                                        <img src="images/rank_avator.svg" alt="user">
                                    </div>
                                    <div class="rank_country">
                                        <span>AZ</span>
                                    </div>
                                    <div class="rank_username">
                                        HEROIC
                                    </div>
                                    <div class="tank_tags_list">
                                        <a href="#">Jabi</a>
                                        <a href="#">TeSes</a>
                                        <a href="#">cadiaN</a>
                                        <a href="#">stavn</a>
                                        <a href="#">Sjush</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="bottom_btns ranking_bottom_btn">
                    <a href="#" class="btn btn-outline-primary ml-2">SHow more teams <img
                            src="images/down_arrow.svg"> </a>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection