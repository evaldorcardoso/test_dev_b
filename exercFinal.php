interface ElementCollection tem
    metodo getElements():ElementIterator


class Componente implementa ElementCollection tem{
    metodo getElements():ElementIterator{
        r = new LinkedList<Element>()
        para (Component c: components)
            r.adicionarTodos(c.getElements())
        retorna r
    }
}

interface ElementIterator tem
    metodo getNext():Element
    metodo hasMore():boll

class CompositeIterator implements ElementIterator tem{
    construtor CompositeIterator(Composite){
        ..
    }
    metodo getNext():Element{
        retorna Element;
    }
    metodo hasMore():boll{
        ..
    }

}