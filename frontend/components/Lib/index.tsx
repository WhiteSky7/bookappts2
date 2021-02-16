import React, { Component } from 'react'

import { API_BASE_URL } from '../../config';
import {Table} from 'react-bootstrap';

interface ILib {
    libs: string
}
class Lib extends React.Component<{}, any> {


    constructor(props) {
        super(props);
        this.state = {
            libs: null
        };
    }

    componentDidMount() {
        this.getPlayers();
    }

    async getPlayers() {
        if (! this.state.libs) {
            try {
                this.setState({ isLoading: true });
                const response = await fetch(API_BASE_URL + 'libs', {

                });
                const libsList = await response.json();
                this.setState({ players: libsList.data, isLoading: false});
            } catch (err) {
                this.setState({ isLoading: false });
                console.error(err);
            }
        }
    }

    render() {
        return (
            <div>
                <h1>libs</h1>

                {this.state.libs &&
                    <div>
                        <Table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Answers</th>
                                    <th>Points</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {this.state.libs.map(
                                    lib =>
                                        <tr id={lib.id} key={lib.id}>
                                            <td>{lib.id}</td>
                                            <td>
                                                Action buttons placeholder
                                            </td>
                                        </tr>
                            )}
                            </tbody>
                        </Table>
                    </div>
                }
            </div>
        );
    }

}

export default Lib;
