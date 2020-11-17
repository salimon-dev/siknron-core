import React from "react";
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Redirect,
} from "react-router-dom";
import Login from "./containers/Login";
import Register from "./containers/Register";
import ResetPassword from "./containers/ResetPassword";

const Component = () => {
  return (
    <Router>
      <Switch>
        <Route path="/login">
          <Login />
        </Route>
        <Route path="/register">
          <Register />
        </Route>
        <Route path="/reset-password">
          <ResetPassword />
        </Route>
        <Redirect from="/" to="/login" />
      </Switch>
    </Router>
  );
};

export default Component;
