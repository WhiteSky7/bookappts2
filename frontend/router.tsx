
import * as React from 'react';
import { hot } from 'react-hot-loader';
import {BrowserRouter , Switch, Route} from 'react-router-dom';
import {Index} from 'components/Index'

export const RouterComponent = hot(module)(() => (
    <BrowserRouter>
      <Switch>
        <Route path="/" component={Index} />
      </Switch>
      
    </BrowserRouter>
    
));
