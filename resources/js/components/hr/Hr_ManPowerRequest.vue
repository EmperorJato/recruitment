<template>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Man Power Request</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <th>Date Requested</th>
              <th>Requester</th>
              <th>Requesting</th>
              <th>Company</th>
              <th>Location Branch</th>
              <th>Approval Date</th>
              <th>Action</th>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.")
  }
}
</script>