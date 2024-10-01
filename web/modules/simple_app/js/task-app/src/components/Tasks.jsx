import { IoCheckmarkDoneSharp } from "react-icons/io5";
import { RiProgress5Fill } from "react-icons/ri";

const Tasks = () => {
  return (
    <div>
      <h1 className="mb-8 mt-8 text-center text-xl text-orange-900">
        Continuous Integration and Continuous Delivery/Deployment
      </h1>

      <form
        className="mx-auto bg-purple-600 text-white px-4 pt-4 pb-4 rounded-lg"
        style={{ maxWidth: "700px", border: "solid 1px orange" }}
      >
        <p className="text-xl text-left mb-4">
          .....testing AWS beanstalk ec2
        </p>
        <div className="flex items-center">
          <input className="w-4 h-4" type="checkbox" />
          <label className="ml-2 text-lg flex items-center" htmlFor="workflows">
            Github workflows
            <span className="pl-4">
              <IoCheckmarkDoneSharp color="orange" size="40" />
            </span>
          </label>
        </div>
        <div className="flex items-center">
          <input className="w-4 h-4" type="checkbox" />
          <label className="ml-2 text-lg flex items-center" htmlFor="jenkins">
            Jenkins
            <span className="pl-4">
              <IoCheckmarkDoneSharp color="orange" size="40" />
            </span>
          </label>
        </div>
        <div className="flex items-center">
          <input className="w-4 h-4" type="checkbox" />
          <label className="ml-2 text-lg flex items-center" htmlFor="qube">
            SonarQube
            <span className="pl-4">
              <IoCheckmarkDoneSharp color="orange" size="40" />
            </span>
          </label>
        </div>
        <div className="flex items-center">
          <input className="w-4 h-4" type="checkbox" />
          <label className="ml-2 text-lg flex items-center" htmlFor="cloud">
            SonarCloud
            <span className="pl-4">
              <IoCheckmarkDoneSharp color="orange" size="40" />
            </span>
          </label>
        </div>
        <div className="flex items-center">
          <input className="w-4 h-4" type="checkbox" />
          <label className="ml-2 text-lg flex items-center" htmlFor="aws">
            AWS
            <span className="pl-4">
              <RiProgress5Fill color="orange" size="40" />
            </span>
          </label>
        </div>
      </form>
    </div>
  );
};
export default Tasks;
