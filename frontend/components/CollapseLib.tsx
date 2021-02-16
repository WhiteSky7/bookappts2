import React, {useState} from 'react';
import {Button, Collapse} from 'react-bootstrap';
import Lib from './Lib/index';

const CollapseLib = () => {
    const [open, setOpen] = useState(false);

    return (
      <>
        <Button
          onClick={() => setOpen(!open)}
          aria-controls="example-collapse-text"
          aria-expanded={open}
        >
          Библиотеки
        </Button>
        <Collapse in={open}>
          <div>
            <blockquote></blockquote>
                <Lib></Lib>
          </div>
        </Collapse>
      </>
    );
  }

export default CollapseLib
