import React, { Component } from 'react'

import { API_BASE_URL } from '../../config';
import {Table} from 'react-bootstrap';

interface Ibook {
    books: string
}
class Book extends React.Component<{}, any> {


    constructor(props) {
        super(props);
        this.state = {
            books: null
        };
    }

    componentDidMount() {
        this.getPlayers();
    }

    async getPlayers() {
        if (! this.state.books) {
            try {
                this.setState({ isLoading: true });
                const response = await fetch(API_BASE_URL + 'books', {

                });
                const booksList = await response.json();
                this.setState({ players: booksList.data, isLoading: false});
            } catch (err) {
                this.setState({ isLoading: false });
                console.error(err);
            }
        }
    }

    render() {
        return (
            <div>
                <h1>books</h1>

                {this.state.books &&
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
                            {this.state.books.map(
                                    book =>
                                        <tr id={book.id} key={book.id}>
                                            <td>{book.id}</td>
                                            <td>{book.name}</td>
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

export default Book;
