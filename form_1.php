<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        height: 180vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #a5d8ff, #364fc7);
        /* background-image: linear-gradient(
            rgba(0, 0, 0, 0.616),
            rgba(0, 0, 0, 0.24)
          ),
          url(1.jpg); */
      }
      .container {
        max-width: 700px;
        width: 100%;
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
      }
      .container .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
      }
      .container .title::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 50px;
        border-radius: 5px;
        background: linear-gradient(135deg, #a5d8ff, #364fc7);
      }
      .content form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
      }
      form .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
      }
      form .input-box span.details {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
      }
      .user-details .input-box input {
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
      }
      .user-details .input-box input:focus,
      .user-details .input-box input:valid {
        border-color: #364fc7;
      }
      form .gender-details .gender-title {
        font-size: 20px;
        font-weight: 500;
      }
      form .dose-details .dose-title {
        font-size: 20px;
        font-weight: 500;
        padding-bottom: 40px;
      }
      form .travel-details .travel-title {
        font-size: 20px;
        font-weight: 500;
      }
      form .vaccination-details .vaccination-title {
        font-size: 20px;
        font-weight: 500;
      }

      form .category {
        display: flex;
        width: 80%;
        margin: 14px 0;
        justify-content: space-between;
      }
      form .category label {
        display: flex;
        align-items: center;
        cursor: pointer;
      }
      form .category label .dot {
        height: 18px;
        width: 18px;
        border-radius: 50%;
        margin-right: 10px;
        background: #d9d9d9;
        border: 5px solid transparent;
        transition: all 0.3s ease;
      }
      #dot-1:checked ~ .category label .one,
      #dot-2:checked ~ .category label .two,
      #dot-3:checked ~ .category label .three,
      #dot-4:checked ~ .category label .four,
      #dot-5:checked ~ .category label .five,
      #dot-6:checked ~ .category label .six,
      #dot-7:checked ~ .category label .seven,
      #dot-8:checked ~ .category label .eight,
      #dot-9:checked ~ .category label .nine,
      #dot-10:checked ~ .category label .ten,
      #dot-11:checked ~ .category label .eleven,
       #dot-12:checked ~ .category label .twelve,
        #dot-13:checked ~ .category label .thirteen,
         #dot-14:checked ~ .category label .fourteen  {
        background: #2b8a3e;
        border-color: #d9d9d9;
      }
      form input[type="radio"] {
        display: none;
      }
      form .button {
        height: 45px;
        margin: 35px 0;
      }
      form .button input {
        height: 100%;
        width: 100%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #a5d8ff, #364fc7);
      }
      form .button input:hover {
        transform: scale(0.99);
        background: linear-gradient(-135deg, #a5d8ff, #364fc7);
      }
      @media (max-width: 584px) {
        .container {
          max-width: 100%;
        }
        form .user-details .input-box {
          margin-bottom: 15px;
          width: 100%;
        }
        form .category {
          width: 100%;
        }
        .content form .user-details {
          max-height: 300px;
          overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar {
          width: 5px;
        }
      }
      @media (max-width: 459px) {
        .container .content .category {
          flex-direction: column;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="title">TRACKING AND TRACING</div>
      <div class="content">
        <form action="connect.php" method="POST">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input
                type="text"
                placeholder="Enter your name"
                required
                name="Name"
              />
            </div>
            <div class="input-box">
              <span class="details">Fathers Name</span>
              <input
                type="text"
                placeholder="Enter your father's name"
                required
                name="FatherName"
              />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input
                type="text"
                placeholder="Enter your email"
                required
                name="Email"
              />
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input
                type="text"
                placeholder="Enter your number"
                required
                name="PhNum"
              />
            </div>
            <div class="input-box">
              <span class="details">Address</span>
              <input
                type="text"
                placeholder="Enter your Address"
                required
                name="Address"
              />
            </div>
            <div class="input-box">
              <span class="details">City</span>
              <input
                type="text"
                placeholder="Enter your city"
                required
                name="City"
              />
            </div>
            <div class="input-box">
              <span class="details">District</span>
              <input
                type="text"
                placeholder="Enter your district"
                required
                name="District"
              />
            </div>
            <div class="input-box">
              <span class="details">State</span>
              <input
                type="text"
                placeholder="Enter your state"
                required
                name="State"
              />
            </div>
            <div class="input-box">
              <span class="details">Country</span>
              <input
                type="text"
                placeholder="Enter your country"
                required
                name="Country"
              />
            </div>
          </div>
          <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" value="m" />
            <input type="radio" name="gender" id="dot-2" value="f" />
            <input type="radio" name="gender" id="dot-3" value="o" />
            <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Others</span>
              </label>
            </div>
          </div>
          <div class="covid-details">
            <input type="radio" name="Covid" id="dot-4" value="y" />
            <input type="radio" name="Covid" id="dot-5" value="n" />

            <span class="covid-title">Have you had covid before?</span>
            <div class="category">
              <label for="dot-4">
                <span class="dot four"></span>
                <span class="covid">Yes</span>
              </label>
              <label for="dot-5">
                <span class="dot five"></span>
                <span class="covid">No</span>
              </label>
            </div>
          </div>
          <div class="dose-details">
            <input type="radio" name="dose" id="dot-6" value="n" />
            <input type="radio" name="dose" id="dot-7" value="s" />
            <input type="radio" name="dose" id="dot-8" value="b" />

            <span class="dose-title">Number of Dose</span>
            <div class="category">
              <label for="dot-6">
                <span class="dot six"></span>
                <span class="dose">None</span>
              </label>
              <label for="dot-7">
                <span class="dot seven"></span>
                <span class="dose">Single</span>
              </label>
              <label for="dot-8">
                <span class="dot eight"></span>
                <span class="dose">Both</span>
              </label>
            </div>
          </div>
          <div class="vaccination-details">
            <input type="radio" name="Vaccine" id="dot-9" value="p" />
            <input type="radio" name="Vaccine" id="dot-10" value="m" />
            <input type="radio" name="Vaccine" id="dot-11" value="cov" />
            <input type="radio" name="Vaccine" id="dot-12" value="vax" />
            <span class="vaccination-title">Which vaccine did you take?</span>
            <div class="category">
              <label for="dot-9">
                <span class="dot nine"></span>
                <span class="vaccination">Pfizer</span>
              </label>
              <label for="dot-10">
                <span class="dot ten"></span>
                <span class="vaccination">Moderna</span>
              </label>
              <label for="dot-11">
                <span class="dot eleven"></span>
                <span class="vaccination">Covishield</span>
              </label>
              <label for="dot-12">
                <span class="dot twelve"></span>
                <span class="vaccination">Covaxin</span>
              </label>
            </div>
          </div>
          <div class="travel-details">
            <input type="radio" name="Travel" id="dot-13" value="y" />
            <input type="radio" name="Travel" id="dot-14" value="n" />

            <span class="travel-title"
              >Have you travelled abroad during 2020?</span
            >
            <div class="category">
              <label for="dot-13">
                <span class="dot thirteen"></span>
                <span class="travel">Yes</span>
              </label>
              <label for="dot-14">
                <span class="dot fourteen"></span>
                <span class="travel">No</span>
              </label>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="SUBMIT" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
