

    <section id="shopping-cart">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-warning">
                            <h4 class="card-title">sms inbox</h4>
                            <p>This is a log of messages that we have received belonging to you. You can receive messages by requesting a short code or keyword.
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table id="recent-orders" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Text</th>
                                        <th class="border-top-0">From</th>
                                        <th class="border-top-0">To</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate"><a href="#">17/06/2020</a></td>
                                        <td class="text-truncate">

                                        <span>No Messages Found

</span>
                                        </td>
                                        <td class="text-truncate p-1">
                                            Kibet
                                        </td>
                                        <td class="text-truncate p-1">
                                            Koech
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection



<script>
export default {
name: "inbox.vue"
}
</script>

<style scoped>

</style>
