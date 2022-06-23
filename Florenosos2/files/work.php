<form action="">
                <div class="whi">
                    <div class="my_title">
                        <div id="title-info" class="titless">
                            <label for="">Work History Information</label>
                        </div>
                    </div>
                    <div class="details">
                        <label for="">Employer</label>
                        <input type="text" name="employer" placeholder="Enter job title here" minlength="1" maxlength="25" pattern="/^[A-Za-z]+$/">
                        <label for="">Dates Employed
                            <input type="date" name="demp" placeholder="Enter date here">
                        </label>
                        <label for="">To
                            <input type="date" name="to" placeholder="Enter date here">
                        </label>
                        <label for="">Address
                            <input type="text" name="address1" placeholder="Enter address here" minlength="1" maxlength="50" pattern="[a-zA-Z0-9\s]+" required>
                        </label>
                        <label for="">Pay Rate (Only Numbers can input here)
                            <input type="number" name="prate" placeholder="Enter amount here" minlength="1" maxlength="6">
                        </label>
                        <label for="">Position
                            <input type="text" name="position" placeholder="Enter name here" minlength="1" maxlength="25" pattern="/^[A-Za-z]+$/">
                        </label>
                        <label for="">Supervisor's Name
                            <input type="text" name="sname" placeholder="Enter company here" minlength="1" maxlength="25" pattern="/^[A-Za-z]+$/">
                        </label>
                        <label for="">Duties Performed
                            <input type="text" name="dperf" placeholder="Enter duties here" minlength="1" maxlength="500" pattern="/^[A-Za-z]+$/">
                        </label>
                        <label for="">Reason for leaving
                            <input type="text" name="rfl" placeholder="Enter reason here" minlength="1" maxlength="500" pattern="/^[A-Za-z]+$/">
                        </label>

                        <!--Pop up when click-->
                        <label for="">May we contact them?
                            <div>
                                <input type="radio" name="male" id="male">
                                <label for="">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="female" id="female">
                                <label for="">No</label>
                            </div>  
                        </label>
                        <label for="">(Note: If the answer is "NO", this field must show to this question)</label>
                        <label for="">If no, Why?
                            <input type="text" name="reason" placeholder="Enter reason here">
                        </label>
                        <!--End of Reason pop up-->

                    </div>
                    <button type="submit" name="awd">Additional Work History</button>
                </div>
            </form>