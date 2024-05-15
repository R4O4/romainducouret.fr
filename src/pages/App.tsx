import { HashRouter as Router, Routes, Route } from "react-router-dom"
import { Home } from "./home"
import { Page1 } from "./page1"
import { Page2 } from "./page2"
import { Layout } from "../Layout"
import "../index.css"
function App() {

  return (
    <>
      <Router>
        <Routes>
          <Route element={<Layout/>}>
            <Route path="/" element={<Home />} />
            <Route path="/page1" element={<Page1 />} />
            <Route path="/page2" element={<Page2 />} />
          </Route>
        </Routes>
      </Router>
    </>
  )
}

export default App
