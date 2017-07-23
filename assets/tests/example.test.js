import assert from 'assert';
import { greet } from '../js/utils';

describe('Example', () => {
    it('greets', () => {
        assert.equal('Yo yo User - welcome to Encore!', greet('User'));
    });
});
