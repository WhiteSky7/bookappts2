import React, { useContext, useEffect } from "react";
import { UserContext } from "contexts/UserContext"
import { notification } from "antd";
import { css } from "emotion";

const openNotificationWithIcon = type => {
    notification[type]({
        message: "Ant Design is working"
    });
};

interface IProps {

}

export const : React.FC<IProps> = () => {
    const [user, setUser] = useContext<any>(UserContext)

    useEffect(() => {
        openNotificationWithIcon("info");
    }, [])

    return (
        <div className={css(`padding: 12rem`)}>
            <h1>bookappts2 - Library mini app</h1>

            <div className={"bg-blue-600 text-white p-4 mt-4"}>
                <p>
                    If you are seeing this then you have successfully
                    installed the boilerplate.
                </p>
            </div>
        </div >
    );
}