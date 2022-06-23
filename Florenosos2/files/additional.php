<form action="">
                <div class="ai">
                    <div class="my_title">
                        <div id="title-info" class="titless">
                            <label for="">Additional Information</label>
                        </div>
                    </div>
                    <div class="details">
                        <label for="">Position
                            <input type="text" name="postn" placeholder="Enter position here" minlength="1" maxlength="25" pattern="/^[A-Za-z]+$/">
                        </label>
                        <label for="">
                            <div>
                                <input type="radio" name="cw" id="cw">
                                <label for="">Co-Worker</label>

                                <input type="radio" name="cf1" id="cf1">
                                <label for="">Career Fair</label>

                                <input type="radio" name="po" id="po">
                                <label for="">Pro. Organization</label>

                                <input type="radio" name="rcruit" id="rcruit">
                                <label for="">Recruiter</label>

                            </div>
                            <div>
                                <input type="radio" name="cf2" id="cf2">
                                <label for="">Career Fair</label>

                                <input type="radio" name="jser" id="jser">
                                <label for="">Job Service</label>

                                <input type="radio" name="ffm" id="ffm">
                                <label for="">Friends/Family Member</label>

                                <input type="radio" name="other" id="other">
                                <label for="">Other</label>

                            </div>
                            <!--Pop up-->
                            <label for="">(Note: If "Other" is checked, this field must show to this question)</label>
                            <input type="text" name="othersq" placeholder="Enter information here" minlength="1" maxlength="50" pattern="/^[A-Za-z]+$/">

                            <label for="">Attach Resume
                                <input type="file" name="attresume" id="attresume" placeholder="Attach file here">
                            </label>
                        </label>
                    </div>
                </div>
            </form>