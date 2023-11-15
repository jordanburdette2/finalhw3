<h1>Employees chart</h1>
<h1>Chart.js</h1>
<div>
  <canvas id="myChart"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($employee = $employees->fetch_assoc()) {
  echo $employee['num_divisions'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$employees = selectEmployees();
while ($employee = $employees->fetch_assoc()) {
echo "'" . $employee['employee_name'] . "', ";
}
?>
    ]
},
  });

import React, { Component } from 'react';
import ReactDOM from 'react-dom';
 
const DEFAULT_INPUT_TEXT = "";
 
class MyInput extends Component {
  constructor(props) {
    super(props);
 
    this.state = {
      text: DEFAULT_INPUT_TEXT,
    };
  }
 
  changeText(e) {
    let text = e.target.value;
 
    this.setState({
      text,
    });
 
    /*
     * This will update the value that the confirm
     * button resolves to:
     */
    swal.setActionValue(text);
  }
 
  render() {
    return (
      <input
        value={this.state.text}
        onChange={this.changeText.bind(this)}
      />
    )
  }
}
 
// We want to retrieve MyInput as a pure DOM node: 
let wrapper = document.createElement('div');
ReactDOM.render(<MyInput />, wrapper);
let el = wrapper.firstChild;
 
swal({
  text: "Write something here:",
  content: el,
  buttons: {
    confirm: {
      /*
       * We need to initialize the value of the button to
       * an empty string instead of "true":
       */
      value: DEFAULT_INPUT_TEXT,
    },
  },
})
.then((value) => {
  swal(`You typed: ${value}`);
});

</script>
    
    
