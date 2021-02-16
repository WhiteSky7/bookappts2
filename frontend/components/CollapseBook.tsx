import React, {useState} from 'react';
import {Button, Collapse} from 'react-bootstrap';
import Book from './Book/index';

const CollapseBook = () => {
    const [open, setOpen] = useState(false);

    return (
      <>
        <Button
          onClick={() => setOpen(!open)}
          aria-controls="example-collapse-text"
          aria-expanded={open}
        >
          Книги
        </Button>
        <Collapse in={open}>
          <Book></Book>
        </Collapse>
      </>
    );
  }

export default CollapseBook
