<form action="">
                <div id="title">
                    <div class="my_title">
                        <div id="title-info" class="titless">
                            <label for="">Personal Information</label>
                        </div>
                    </div>
                    <div class="details">
                        <div class="pi1">
                            <div class="fpi1">
                                <label for="">First Name</label>
                                <input type="text" name="fname" placeholder="Enter first name here" minlength="1" maxlength="25" required pattern="/^[A-Za-z]+$/">
                            </div>
                            <div class="mpi1">
                                <label for="">Middle Initial</label>
                                <input type="text" name="midint" placeholder="Enter middle initial here" minlength="1" maxlength="2" pattern="/^[A-Za-z]+$/">
                            </div>
                            <div class="lpi1">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" placeholder="Enter last name here" minlength="1" maxlength="25" required pattern="/^[A-Za-z]+$/">
                            </div>
                        </div>
                        
                        <div class="pi2">
                            <div class="api2">
                                <label for="">Address</label>
                                <input type="text" name="address" placeholder="Enter address here" minlength="1" maxlength="50" required pattern="[a-zA-Z0-9\s]+">
                            </div>
                            <div class="spi2">
                                <label for="">State</label>
                                <select name="state" id="state" required>
                                    <option>Select state here</option>
                                    <option value="a">Alaska</option>
                                    <option value="a">Arizona</option>
                                    <option value="a">Arkansas</option>
                                    <option value="a">California</option>
                                    <option value="a">Colorado</option>
                                    <option value="a">Florida</option>
                                    <option value="a">Georgia</option>
                                    <option value="a">Hawaii</option>
                                    <option value="a">Idaho</option>
                                    <option value="a">Illinois</option>
                                    <option value="a">Indiana</option>
                                </select>
                            </div> 
                        </div>
                        
                        <div class="pi3">
                            <label for="">Gender
                                <input type="radio" name="male" id="male">
                                <label for="">Male</label>
                                <input type="radio" name="female" id="female">
                                <label for="">Female</label>
                            </label> 
                            <label for="">Date of Birth
                                <input type="date" name="bdate" placeholder="Enter date here">
                            </label>
                        </div>
                        
                        <div id="pi4">
                            <div class="emailadds">
                                <label for="">Email Address (Only valid email can input here)</label> 
                                <input type="email" name="emailadd" placeholder="Enter email address here" required>
                            </div>
                            <div class="phonenum">
                                <label for="">Phone Number (Only Numbers can input here)</label>
                                <input type="number" name="phone" placeholder="XXX-XXX-XXX" minlength="1" maxlength="10" required>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>