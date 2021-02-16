import React, {useState} from 'react';
import {Button, Collapse} from 'react-bootstrap';

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
            <Button onClick={() => prompt('hello world')}>dfsd</Button>
          </div>
        </Collapse>
      </>
    );
  }

export default CollapseLib