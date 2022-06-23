<form action="">
                <div class="pri">
                    <div class="my_title">
                        <div id="title-info" class="titless">
                            <label for="">Professional References Information</label>
                        </div>
                    </div>
                    <div class="details">
                        <label for="">Name
                            <input type="text" name="rname" placeholder="Enter name here" minlength="1" maxlength="25" pattern="/^[A-Za-z]+$/" required>
                        </label>
                        <label for="">Company
                            <input type="text" name="company" placeholder="Enter company here" minlength="1" maxlength="25" pattern="/^[A-Za-z]+$/">
                        </label>
                        <label for="">Contact Number (Only Numbers can input here)
                            <input type="number" name="cnum" placeholder="XXX-XXX-XXX" minlength="1" maxlength="10" required>
                        </label>
                        <label for="">Title
                            <input type="text" name="ttl" placeholder="Enter title here" minlength="1" maxlength="25" pattern="/^[A-Za-z]+$/"> 
                        </label>

                        <!--Add References for 4 persons-->
                        <button>Additional References</button>
                    </div>
                </div>
            </form>