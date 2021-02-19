
import * as React from 'react';
import { hot } from 'react-hot-loader';
import {BrowserRouter , Switch, Route} from 'react-router-dom';
import {Page} from 'components/Page'
import Book from 'components/Book';

export const RouterComponent = () => (
    <BrowserRouter>
      <Switch>
        <Route path="/" component={Page} />
      <Route path="/book" component={Book}/>
      </Switch>
    </BrowserRouter>
);
