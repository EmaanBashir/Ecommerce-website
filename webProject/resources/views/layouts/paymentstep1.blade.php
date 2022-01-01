
        <div class="cTable check-1">
            <table class="col-12 col-md-11 col-lg-10 text-start">
                <tbody>
                    <tr class="my-3">
                        <td class="text-end"><i class="fa fa-user-circle text-white px-4"></i></td>
                        <td class = "editable">{{Auth::user()->username}}</td>
                    </tr>
                    <tr class="my-3">
                        <td class="text-end"><i class="fa fa-phone text-white px-4"></i></td>
                        <td class = "editable">{{Auth::user()->number}}</td>
                    </tr>
                    <tr class="my-3">
                        <td class="text-end"><i class="fa fa-envelope text-white px-4"></i></td>
                        <td class = "editable">{{Auth::user()->email}}</td>
                    </tr>
                    <tr class="my-3">
                        <td class="text-end"><i class="fa fa-location-arrow text-pink px-4"></i></td>
                        <td class = "editable">{{Auth::user()->paymentDetails->address}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
