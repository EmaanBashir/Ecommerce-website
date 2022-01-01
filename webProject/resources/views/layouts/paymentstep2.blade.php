
        <div class="cTable check-2">
            <table class="col-12 col-md-11 col-lg-10 text-start mt-3">
                <tbody>
                    <tr class="my-3">
                        <td class="ps-3">Credit Card No: </td>
                        <td class = "editable">{{Auth::user()->paymentDetails->creditCardNo}}</td>
                    </tr>
                    <tr class="my-3">
                        <td class="ps-3">Pin Code: </td>
                        <td class = "editable">{{Auth::user()->paymentDetails->pinCode}}</td>
                    </tr>
                    <tr class="my-3">
                        <td class="ps-3">Discount Code: </td>
                        <td class = "editable">----</td>
                    </tr>
                </tbody>
            </table>
        </div>
