<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner mb">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img src="view/img/Banner01.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="view/img/Banner02.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="view/img/Banner03.jpg" style="width:100%">
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>

                            <!-- The dots/circles -->
                            <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="boxsp '.$mr.'" style="display: inline-block;">
                                        <div class="row img">
                                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" ></a>
                                        </div>
                                        <p style=" padding-left:10px;">$'.$price.'</p>
                                        <a href="'.$linksp.'" style="color:black; padding:10px; text-decoration: none;font-weight: bold;font-size:18px">'.$name.'</a>
                                        <div class="row btnaddtocart">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="'.$id.'">
                                                <input type="hidden" name="name" value="'.$name.'">
                                                <input type="hidden" name="img" value="'.$img.'">
                                                <input type="hidden" name="price" value="'.$price.'">
                                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                            </form>
                                        </div>
                                    </div>';
                                    $i+=1;
                        }
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/img/casio06.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio AE-1200WHD</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/img/casio01.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio 1AVDF Nam Quartz</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/img/casio02.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio 1200WHD</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/img/casio03.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio 500</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/img/casio04.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio 1AVDF</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/img/casio05.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio Quartz</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/img/casio06.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/img/casio07.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio AE</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/img/casio02.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Casio Nam</a>
                    </div>-->
                </div> 
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?>
            </div>

        </div>