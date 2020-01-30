<template>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Screening Section</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <th>Applicant</th>
              <th>Position</th>
              <th>Phone</th>
              <th>Status</th>
              <th>Interview Date</th>
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