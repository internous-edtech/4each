import React, {Component, PropTypes} from 'react';


class Chart extends Component {
    constructor(props) {
        super(props);
    }
    render() {
        let {
            dataset_g,
            dataset_a,
            data_labels
        } = this.props.achievement_graph;

        return (
            <div className="chart-area" id="chart-area">
                <canvas id="line" height="280" width="400"
                    data-dataset_g={dataset_g}
                    data-dataset_a={dataset_a}
                    data-data_labels={data_labels} >
                </canvas>
            </div>
        );
    }
}

export default Chart;
