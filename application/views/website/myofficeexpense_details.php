 <section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <h1 class="tittle">My Office ( Office Expense )</h1>
            <div class="table-responsive">
              <table class="table table-hover" style="text-align: center;">
                <thead>
                  <tr>
                    <th scope="col">EXPENSE</th>
                    <th scope="col">RESOURCE</th>
                    <th scope="col">INSTRUCTION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="<?= base_url('website/expense_daily_report');?>" class="btn btn-sm btn-success">Daily Expense Report</a></td>
                    <td rowspan="2"><a href="<?= base_url('website/daily_expense');?>" class="btn btn-sm btn-success">Daily Expense Form</a><br><br><a href="<?= base_url('website/office_resourse_requisition_form');?>" class="btn btn-sm btn-success">Office Resource Requisition Form</a></td>
                    <td rowspan="3"></td>
                  </tr>
                  <tr>
                    <td><a href="<?= base_url('website/expense_monthly_report');?>" class="btn btn-sm btn-success">Monthly Expenses Report</a></td>
                  </tr>
                  <tr>
                    <td><a href="<?= base_url('website/expense_annual_report');?>" class="btn btn-sm btn-success">Annual Expenses Report</a></td>
                    <td><a href="<?= base_url('website/group_resource_form');?>" class="btn btn-sm btn-success">Group Resource Demand Form</a></td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>