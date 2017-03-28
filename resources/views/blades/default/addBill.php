<?php include 'header.blade.php'; ?>

    <div class="container">
        <div id="example-1">
            <table>
                <tr>
                    <td>Select your biller</td>
                    <td>
                        <select>
                            <option selected disabled>Select your choice</option>
                            <option v-for="biller of billers">{{ biller.name }}</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Account Number</td>
                    <td><input type="text"></td>
                </tr>
            </table>

            <button v-on:click="submit">Submit</button>
        </div>
    </div>

<?php include 'footer.blade.php'; ?>