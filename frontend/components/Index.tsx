import React, { useContext, useEffect } from "react";
import { UserContext } from "contexts/UserContext"
import { notification } from "antd";
import { css } from "emotion";
import {Button, Container, Col, Row} from "react-bootstrap";
import CollapseBook from './CollapseBook';
import CollapseLib from './CollapseLib';

import { API_BASE_URL } from '../config';

const openNotificationWithIcon = type => {
    notification[type]({
        message: "Ant Design is working"
    });
};

interface IProps {

}

export const Index: React.FC<IProps> = () => {

    return (

        <Container>
                    <Row>
                        <Col>
        <h1>Laravel React Typescript BookApp</h1>
                        </Col>
                    </Row>
                    <Row>
                        <Col>
                            <CollapseBook/>
                        </Col>
                    </Row>
                    <blockquote></blockquote>
                    <Row>
                        <Col>
                            <CollapseLib/>
                        </Col>
                    </Row>
                </Container>


    );
}
