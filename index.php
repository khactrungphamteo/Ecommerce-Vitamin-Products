<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Vitamin and Supplements</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="style.css" type="text/css" rel="stylesheet" />
    
  </head>
  <body>
    <!--Front Page-->
    <div class="front-page">
      <!--Section-1-->
      <div class="section-1">
        <div class="drop-down">
          <div class="menu">
            <span class="material-icons"> menu </span>
            <span><p>Menu</p></span>
          </div>
          <div class="form-container">
            <form
              action="http://examples.funwebdev.com/process.php"
              method="POST"
            >
              <input type="text" placeholder="please search for an item" />
              <!--<input type="submit" name="submit" value="search now" />-->
              <button class="submit-btn">
                <span class="material-icons">search</span>
              </button>
            </form>
          </div>

          <div class="account">
            <p>Already have an account? <span class="login">Sign in</span></p>
            <a href="" class="signup">Sign up</a>
          </div>
          <a href="#" target="_blank">
            <div class="cart">
              <span class="material-icons"> shopping_cart </span>
              <p>Cart</p>
            </div>
          </a>
        </div>
        <!-- Navigation Bar-->
        <div id="navBar">
          <ul>
            <li><a href="#" target="_blank">Account</a></li>
            <li><a href="#" target="_blank">Shop</a></li>
            <li><a href="#" target="_blank">About us</a></li>
            <li><a href="#" target="_blank">Contact</a></li>
            <li><a href="#" target="_blank">Blog</a></li>
            <li><a href="#" target="_blank">Cart</a></li>
          </ul>
        </div>
        <!--End of Navigation bar-->

        <!--Drop down meny-->
        <ul class="nav-list">
          <li class="nav-list-item-1">
            <a href="#" class="nav-list-link">All Products</a>
            <ul class="nav-dropdown">
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link"
                  >Brain and Cognitive Health</a
                >
              </li>
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link">Cardiovascular Support</a>
              </li>
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link">Bone and Joint Health</a>
              </li>
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link"
                  >Prenatal and Postnatal Vitamins</a
                >
              </li>
            </ul>
          </li>

          <li class="nav-list-item-2">
            <a href="#" class="nav-list-link">Best sellers</a>
            <ul class="nav-dropdown-2">
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link"
                  >Price highest to lowest</a
                >
              </li>
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link"
                  >Price lowest to highest</a
                >
              </li>
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link">Sort from A to Z</a>
              </li>
              <li class="nav-dropdown-item">
                <a href="#" class="nav-dropdown-link">Sort from Z to A</a>
              </li>
            </ul>
          </li>
        </ul>
        <!--end of dropdown menu-->
      </div>
      <!--End of section-1-->

      <!---PRODUCT DISPLAY--->
      <table>
        <thead>
          <tr>
            <th colspan="5">All products</th>
          </tr>
        </thead>
        <tbody>
          <tr class="card">
            <td class="container-img">
              <img
                src="https://s7.vitaminshoppe.com/is/image/VitaminShoppe/1062927_01?$OP_PDPZOOM$"
              />
              <!--
                <figcaption class="popup">
                    <img src="https://s7.vitaminshoppe.com/is/image/VitaminShoppe/1062927_01?$OP_PDPZOOM$" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$7.99</h5>
              <div id="button1" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img
                src="https://media.swansonvitamins.com/images/items/master/SW001.jpg"
              />
              <!--
                <figcaption class="popup">
                    <img src="https://media.swansonvitamins.com/images/items/master/SW001.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$4.99</h5>
              <div id="button2" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img
                src="https://lifeirl.com/wp-content/uploads/2021/05/81-73gyIZQL-1536x1536.jpg"
              />
              <!--
                <figcaption class="popup">
                    <img src="https://lifeirl.com/wp-content/uploads/2021/05/81-73gyIZQL-1536x1536.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$6.99</h5>
              <div id="button3" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img
                src="https://media.swansonvitamins.com/images/items/master/NWF364.jpg"
              />
              <!--
                <figcaption class="popup">
                    <img src="https://media.swansonvitamins.com/images/items/master/NWF364.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$10.99</h5>
              <div id="button4" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img
                src="https://cdn.shopify.com/s/files/1/1380/9789/products/VitaminAGreenLabelListingImage1_600x.jpg?v=1633106507"
              />
              <!--
                <figcaption class="popup">
                    <img src="https://cdn.shopify.com/s/files/1/1380/9789/products/VitaminAGreenLabelListingImage1_600x.jpg?v=1633106507" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">vitamin</h5>
              <h5>$10.99</h5>
              <div id="button5" class="product-button">Add to cart</div>
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr class="card">
            <td class="container-img">

              <img src="https://s3.images-iherb.com/nwy/nwy40110/v/34.jpg" />
              <!--
                <figcaption class="popup">
                    <img src="https://s3.images-iherb.com/nwy/nwy40110/v/34.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$10.99</h5>
              <div id="button6" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img src="https://www.rehabmart.com/imagesfromrd/vnva10.jpg" />
              <!--
                <figcaption class="popup">
                    <img src="https://www.rehabmart.com/imagesfromrd/vnva10.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$10.99</h5>
              <div id="button7" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img src="https://s3.images-iherb.com/blb/blb00298/v/29.jpg" />
              <!--
                <figcaption class="popup">
                    <img src="https://s3.images-iherb.com/blb/blb00298/v/29.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$10.99</h5>
              <div id="button8" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img src="https://www.wonderlabs.com/360size/1254.jpg" />
              <!--
                <figcaption class="popup">
                    <img src="https://www.wonderlabs.com/360size/1254.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$10.99</h5>
              <div id="button9" class="product-button">Add to cart</div>
            </td>
            <td class="container-img">
              <img
                src="https://media.swansonvitamins.com/images/items/master/SLR281.jpg"
              />
              <!--
                <figcaption class="popup">
                    <img src="https://media.swansonvitamins.com/images/items/master/SLR281.jpg" alt="">
                    <p>product info</p>
                </figcaption>
            -->
              <h5 class="product-name">Vitamin A</h5>
              <h5>$10.99</h5>
              <div id="button10" class="product-button">Add to cart</div>
            </td>
          </tr>
        </tbody>

        <div class="change-mode">
          <input
            type="text"
            id="colorInput"
            placeholder="type 'black' for dark mode"
          />
          <input
            type="button"
            id="colorButton"
            value="Change background color"
            onclick="changeColor()"
          />
        </div>

        <!--showing the item has been added to cart-->
        <div id="add-to-cart"></div>
      </table>
      <footer>
        <div>
          <summary>NEW TO THE WEBSITE?</summary>
          <p>
            Don't forget to leave your email to enjoy multiple discounts and
            carefully curated blog posts on healthy lifestyles from us!
          </p>
          <form>
            <label>First Name</label>
            <input type="name" />
            <label>Email</label>
            <input type="email" />
            <label for="">Phone Number</label>
            <input
              type="text"
              placeholder="123-45-678"
              pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
            />
            <input type="submit" name="submit" value="Submit" />
          </form>
          <p>Please contact us via email at <em>trungteo0707@gmail.com</em></p>
        </div>
      </footer>
    </div>
    <!--End of front page-->

    <!--Log in page-->
    <div class="login-page">
      <div class="login-page-content">
        <div class="login-logo"><span>Log In</span></div>
        <form action="login.php" method="post" class="login-form">
          <div class="form-control">
            <input
              type="text"
              class="form-login-input"
              id="username"
              name="username"
              placeholder="Email or Phone number"
            />
            <small>Please enter email or phone number</small>
          </div>
          <div class="form-control">
            <input
              type="password"
              class="form-login-input"
              id="password"
              name="password"
              placeholder="Password"
            />
            <small>Please enter your password</small>
          </div>
          <button type="submit" name="submit" class="form-btn">Log In</button>

          <a href="" class="form-login-link">Having trouble logging in?</a>
          <span>or</span>
          <input type="text" class="form-btn signup" value="Sign up" />
        </form>
      </div>
      <button class="front-page-btn">Back to Front Page</button>
    </div>
    <!--Enf of sign up page-->

    <div class="signup-page">
      <div class="signup-page-content">
        <h3>Registration</h3>
        <form action="insert.php" method="post" id="signup-form">
          <div class="form-control-signup">
            <label>First Name</label>
            <input
              type="text"
              class="form-signup-input"
              id="firstname"
              name="firstname"
              placeholder=""
            />
          </div>

          <div class="form-control-signup">
            <label>Last Name</label>
            <input
              type="text"
              class="form-signup-input"
              id="lastname"
              name="lastname"
              placeholder=""
            />
          </div>

          <div class="form-control-signup">
            <label>Phone Numeber</label>
            <input
              type="text"
              placeholder="123-456-7890"
              id="phonenumber"
              name="phonenumber"
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
            />
          </div>

          <div class="form-control-signup">
            <label>Your Email</label>
            <input
              type="text"
              class="form-signup-input"
              id="email"
              name="email"
              placeholder=""
            />
          </div>

          <div class="form-control-signup">
            <label>Password</label>
            <input
              type="password"
              class="form-signup-input"
              id="password-signup-1"
              name="password-signup-1"
              placeholder="password"
            />
          </div>

          <div class="form-control-signup">
            <label>Reenter Password</label>
            <input
              type="password"
              class="form-signup-input"
              id="password-signup-2"
              name="password-signup-2"
              placeholder="password"
            />
          </div>
          
          <button type="submit" name="submit" class="form-btn">Register</button>
          
        </form>

        <div>
          <button class="front-page-btn">Back to Front Page</button>
          </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="script.js"></script>
    
    
   
  </body>
</html>
